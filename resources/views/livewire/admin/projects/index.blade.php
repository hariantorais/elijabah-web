<?php

use function Livewire\Volt\{state, computed, usesPagination, title, on};
use App\Models\Project;
use App\Models\Package;

usesPagination();
title('Manajemen Projek');

state([
    'search' => '',
    'filter_status' => '',
    'filter_payment' => '',
    'filter_package' => ''
])->url();

state([
    'selectedProject' => null
]);

// Sinkronisasi render ulang saat ada event simpan dari komponen form anak
on(['project-saved' => function () {
    // Otomatis memicu render ulang komponen list
}]);

$packages = computed(fn() => Package::orderBy('name')->get());

$projects = computed(function () {
    return Project::query()
        ->with(['client', 'package', 'invoices', 'milestones.tasks'])
        ->when($this->search, function ($query) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('pic_name', 'like', '%' . $this->search . '%') // Pencarian diperluas ke nama PIC
                    ->orWhereHas('client', function ($qc) {
                        $qc->where('company_name', 'like', '%' . $this->search . '%');
                    });
            });
        })
        ->when($this->filter_status, function ($query) {
            $query->where('status', $this->filter_status);
        })
        ->when($this->filter_package, function ($query) {
            $query->where('package_id', $this->filter_package);
        })
        ->when($this->filter_payment, function ($query) {
            if ($this->filter_payment === 'no_invoice') {
                $query->doesntHave('invoices');
            } else {
                $query->whereHas('invoices', function ($q) {
                    $q->where('status', $this->filter_payment);
                });
            }
        })
        ->latest()
        ->paginate(10);
});

$updatingSearch = fn() => $this->resetPage();
$updatingFilterStatus = fn() => $this->resetPage();
$updatingFilterPayment = fn() => $this->resetPage();
$updatingFilterPackage = fn() => $this->resetPage();

$delete = function ($id) {
    $project = Project::findOrFail($id);
    $project->delete();
    $this->dispatch('toast', message: "Proyek berhasil dihapus dari sistem.", type: "success");
};

?>

<div class="space-y-6">

    {{-- BARIS ATAS: KONTROL FILTER & UTALITAS AKSI --}}
    <div>
        <div class="flex items-center justify-between gap-4 w-full">

            <!-- KUBU KIRI: Search & Filter Dropdown -->
            <div class="flex items-center gap-2 flex-1 max-w-xs sm:max-w-sm">
                <div class="flex-1 min-w-[140px]">
                    <x-form.search-input wire:model.live.debounce.300ms="search"
                                         placeholder="Cari projek, klien, PIC..." />
                </div>

                <div class="relative" x-data="{ openFilter: false }">
                    <button
                        type="button"
                        @click="openFilter = !openFilter"
                        :class="openFilter ? 'bg-primary/10 border-primary text-primary dark:bg-primary/20' : 'bg-gray-50 dark:bg-gray-900 text-gray-700 dark:text-gray-300 border-gray-200 dark:border-gray-700'"
                        class="border h-10 px-3 rounded-xl text-sm font-semibold flex items-center gap-1.5 transition-colors shrink-0"
                    >
                        <i class="ri-filter-3-line text-lg"></i>
                        <span class="hidden sm:inline">Filter</span>
                        @if($filter_status || $filter_payment || $filter_package)
                            <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                        @endif
                    </button>

                    <div
                        x-show="openFilter"
                        @click.outside="openFilter = false"
                        x-transition
                        x-cloak
                        class="absolute left-0 mt-2 w-64 p-3.5 bg-white dark:bg-gray-800 rounded-xl shadow-xl border border-gray-200 dark:border-gray-700 z-30 space-y-3"
                    >
                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Status
                                Projek</label>
                            <select wire:model.live="filter_status"
                                    class="form-input w-full rounded-lg border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-xs h-9 py-0 px-2 text-gray-700 dark:text-gray-300 focus:border-primary">
                                <option value="">Semua Status</option>
                                <option value="pending">Pending</option>
                                <option value="discussion">Diskusi</option>
                                <option value="on_progress">On Progress</option>
                                <option value="completed">Completed</option>
                                <option value="canceled">Canceled</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Status
                                Pembayaran</label>
                            <select wire:model.live="filter_payment"
                                    class="form-input w-full rounded-lg border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-xs h-9 py-0 px-2 text-gray-700 dark:text-gray-300 focus:border-primary">
                                <option value="">Semua Status Invoice</option>
                                <option value="paid">Lunas (Paid)</option>
                                <option value="unpaid">Belum Bayar</option>
                                <option value="canceled">Dibatalkan</option>
                                <option value="no_invoice">Belum Ada Invoice</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-1">Paket
                                Layanan</label>
                            <select wire:model.live="filter_package"
                                    class="form-input w-full rounded-lg border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-xs h-9 py-0 px-2 text-gray-700 dark:text-gray-300 focus:border-primary">
                                <option value="">Semua Paket Layanan</option>
                                @foreach($this->packages as $pkg)
                                    <option value="{{ $pkg->id }}">{{ $pkg->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KUBU KANAN: Tombol Pemicu Modal Form Baru -->
            <div class="shrink-0">
                <button type="button" @click="$dispatch('open-modal', { name: 'modal-form' })"
                        class="btn bg-primary hover:bg-primary-dark text-white font-semibold px-4 h-10 rounded-xl shadow-sm text-sm flex items-center justify-center gap-1.5 transition-all">
                    <i class="ri-add-line text-lg"></i>
                    <span class="hidden sm:inline">Buat Projek</span>
                </button>
            </div>

        </div>
    </div>

    {{-- KLASTER TABEL INDUK --}}
    <div
        class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 text-xs">
                <thead class="bg-gray-50/80 dark:bg-gray-700/50">
                <tr class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">
                    <th class="px-6 py-4 text-start">Info Projek</th>
                    <th class="px-6 py-4 text-start">Klien</th>
                    <th class="px-6 py-4 text-start">Progress Kerja</th>
                    <th class="px-6 py-4 text-start">Nilai Keuangan</th>
                    <th class="px-6 py-4 text-start">Timeline & Status</th>
                    <th class="px-6 py-4 text-end">Aksi</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                @forelse($this->projects as $project)
                    @php
                        $allTasks = $project->milestones->flatMap->tasks;
                        $totalTasks = $allTasks->count();
                        $completedTasks = $allTasks->where('is_completed', true)->count();
                        $projectPct = $totalTasks > 0 ? round(($completedTasks / $totalTasks) * 100) : 0;
                    @endphp

                    <tr class="hover:bg-gray-50/40 dark:hover:bg-gray-900/20 transition-colors group">

                        {{-- KOLOM 1: INFO PROYEK & METADATA PIC --}}
                        <td class="px-6 py-4">
                            <div class="flex flex-col space-y-1.5 max-w-[220px]">
                                <span
                                    class="text-sm font-bold text-gray-900 dark:text-gray-100 group-hover:text-primary transition-colors truncate">
                                    {{ $project->title }}
                                </span>
                                <div class="flex flex-wrap gap-1.5 items-center">
                                    {{-- Badge Nama Paket --}}
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded-md bg-blue-50 text-blue-600 dark:bg-blue-950/40 dark:text-blue-400 font-bold uppercase tracking-wide">
                                        {{ $project->package?->name ?? 'Custom' }}
                                    </span>

                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex items-center gap-x-3">
                                {{-- 1. AVATAR KLIEN (Ukuran disesuaikan sedikit ke h-9 w-9 agar lebih proporsional) --}}
                                <div
                                    class="flex-shrink-0 h-9 w-9 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-sm border border-primary/20">
                                    {{ substr($project->client?->company_name ?? 'C', 0, 1) }}
                                </div>

                                {{-- 2. KONTEN TEKS STACKED (Membagi atas dan bawah, mencegah kolom melar) --}}
                                <div class="flex flex-col min-w-0">
                                    {{-- Nama Perusahaan Klien --}}
                                    <span
                                        class="text-sm font-bold text-gray-800 dark:text-gray-200 truncate max-w-[180px]"
                                        title="{{ $project->client?->company_name }}">
                {{ $project->client?->company_name ?? 'N/A' }}
            </span>

                                    {{-- Penanggung Jawab / PIC Klien --}}
                                    <span
                                        class="text-[11px] text-gray-400 dark:text-gray-500 font-medium flex items-center gap-1 mt-0.5"
                                        title="Client Contact Person / PIC">
                <i class="ri-user-received-2-line text-gray-400/80 text-xs"></i>
                <span class="truncate max-w-[150px]">{{ $project->client?->pic_name ?? 'No PIC' }}</span>
            </span>
                                </div>
                            </div>
                        </td>

                        {{-- KOLOM 3: INDIKATOR PROGRESS TASKS --}}
                        <td class="px-6 py-4">
                            <div class="flex flex-col w-full max-w-[130px] gap-1.5">
                                <div
                                    class="flex justify-between items-center text-[11px] font-bold text-gray-500 dark:text-gray-400 leading-none">
                                    <span class="text-gray-800 dark:text-gray-200 font-mono">{{ $projectPct }}%</span>
                                    <span class="text-[10px] font-medium text-gray-400">{{ $completedTasks }}/{{ $totalTasks }} Tugas</span>
                                </div>
                                <div
                                    class="flex w-full h-1.5 bg-gray-100 rounded-full overflow-hidden dark:bg-gray-700">
                                    <div
                                        class="flex flex-col justify-center overflow-hidden bg-emerald-500 dark:bg-emerald-400"
                                        role="progressbar" style="width: {{$projectPct}}%"
                                        aria-valuenow="{{ $projectPct }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>

                        {{-- KOLOM 4: BUDGET & AKUMULASI TRANSAKSI --}}
                        <td class="px-6 py-4">
                            <div class="flex flex-col items-start gap-1">
                                <div class="text-sm font-bold text-gray-900 dark:text-white font-mono">
                                    IDR {{ number_format($project->total_budget, 0, ',', '.') }}
                                </div>

                                @php $totalPaid = $project->invoices->sum('amount_paid'); @endphp

                                <div
                                    class="text-[11px] font-bold text-emerald-600 dark:text-emerald-400 flex items-center gap-0.5"
                                    title="Total Dana Masuk">
                                    <i class="ri-arrow-down-circle-line"></i>
                                    IDR {{ number_format($totalPaid, 0, ',', '.') }}
                                </div>


                            </div>
                        </td>

                        {{-- KOLOM 5: STATUS PROJEK & DEADLINE TARGET --}}
                        <td class="px-6 py-4">
                            <div class="flex flex-col items-start gap-1.5">
                                <x-ui.status-badge :status="$project->status" />
                                <div
                                    class="text-[11px] text-gray-500 dark:text-gray-400 flex items-center gap-1 font-semibold">
                                    <i class="ri-calendar-line text-gray-400"></i>
                                    {{ $project->deadline?->format('d M Y') ?? '-' }}
                                </div>
                            </div>
                        </td>

                        {{-- KOLOM 6: PANEL NAVIGASI AKSI --}}
                        <td class="px-6 py-4 text-end">
                            <div
                                class="inline-flex items-center gap-x-2.5 opacity-60 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('admin.projects.show', $project) }}"
                                   class="text-gray-400 hover:text-primary transition-colors p-1"
                                   title="Buka Workspace Detail"
                                >
                                    <i class="ri-eye-line text-lg"></i>
                                </a>
                                <button type="button"
                                        @click="$dispatch('open-modal', { name:'modal-form', id: {{ $project->id }} });"
                                        class="text-blue-500 hover:text-blue-700 transition-colors p-1"
                                        title="Ubah Data Projek">
                                    <i class="ri-edit-line text-lg"></i>
                                </button>
                                <button type="button"
                                        @click="$dispatch('hapus-proyek-event', { id: {{ $project->id }}, name: '{{ addslashes($project->title) }}' })"
                                        class="text-red-400 hover:text-red-600 transition-colors p-1"
                                        title="Hapus Projek">
                                    <i class="ri-delete-bin-line text-lg"></i>
                                </button>
                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="6"
                            class="px-6 py-16 text-center text-gray-400 font-medium bg-white dark:bg-gray-800">
                            <i class="ri-folder-warning-line text-3xl block mb-2 text-gray-300"></i>
                            Tidak ada data proyek yang sesuai dengan kriteria pencarian.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        {{-- BARIS BAWAH: NAVIGASI PAGINASI --}}
        @if ($this->projects->hasPages())
            <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 bg-gray-50/50">
                {{ $this->projects->links() }}
            </div>
        @endif
    </div>

    {{-- INTERAKTIF POPUP MODAL COMPONENT FORM & DELETE --}}
    <x-ui.modal name="modal-form" title="Formulir Data Projek" maxWidth="4xl">
        <livewire:admin.projects.form />
    </x-ui.modal>

    <x-ui.confirm-delete event="hapus-proyek-event" title="Hapus Proyek Agensi?" />

</div>
