<?php

use function Livewire\Volt\{state, computed};
use App\Models\ProjectCredential;

state([
    'projectId' => null,
    'credLabel' => '',
    'credUrl' => '',
    'credPass' => ''
]);

$credentials = computed(function () {
    return ProjectCredential::where('project_id', $this->projectId)->latest()->get();
});

$addCredential = function () {
    if (empty(trim($this->credLabel)) || empty(trim($this->credUrl))) return;

    ProjectCredential::create([
        'project_id' => $this->projectId,
        'label' => $this->credLabel,
        'username' => $this->credUrl,
        'password' => $this->credPass
    ]);

    $this->credLabel = ''; $this->credUrl = ''; $this->credPass = '';
    $this->dispatch('toast', message: "Kredensial disimpan", type: "success");
};

$deleteCredential = function ($id) {
    ProjectCredential::findOrFail($id)->delete();
    $this->dispatch('toast', message: "Kredensial dihapus", type: "success");
};

?>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
    {{-- KOLOM KIRI: DAFTAR ASSET KREDENSIAL --}}
    <div class="lg:col-span-2 space-y-4">
        <h2 class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider flex items-center gap-2">
            <i class="ri-key-2-line text-primary"></i> Brankas Kredensial & Akses Proyek
        </h2>

        @if($this->credentials->isEmpty())
            <div class="text-center py-12 bg-white dark:bg-gray-800 border border-dashed border-gray-200 dark:border-gray-700 rounded-2xl">
                <i class="ri-shield-keyhole-line text-4xl text-gray-300 dark:text-gray-600 mb-2 block"></i>
                <p class="text-xs text-gray-500">Belum ada data akses atau repositori yang didaftarkan.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($this->credentials as $cred)
                    <div wire:key="cred-{{ $cred->id }}" class="bg-white dark:bg-gray-800 rounded-xl p-4 border border-gray-100 dark:border-gray-700 shadow-sm relative group">
                        <div class="pr-12 space-y-1">
                            <span class="text-[9px] font-extrabold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 px-2 py-0.5 rounded-md uppercase tracking-wider">
                                {{ $cred->label }}
                            </span>
                            <p class="text-sm font-semibold text-gray-800 dark:text-gray-200 select-all font-mono truncate pt-1" title="{{ $cred->username }}">
                                {{ $cred->username }}
                            </p>
                            @if($cred->password)
                                <div class="flex items-center gap-2 pt-1">
                                    <span class="text-[11px] text-gray-400">Password:</span>
                                    <span class="text-xs font-mono font-bold text-teal-600 dark:text-teal-400 select-all bg-teal-50 dark:bg-teal-950/40 px-2 py-0.5 rounded">
                                        {{ $cred->password }}
                                    </span>
                                </div>
                            @endif
                        </div>

                        {{-- TOMBOL UTILITY --}}
                        <div class="absolute top-4 right-4 flex items-center gap-2">
                            <button @click="navigator.clipboard.writeText('{{ $cred->password ? $cred->username . ' | ' . $cred->password : $cred->username }}'); $dispatch('toast', {message: 'Akses disalin!', type: 'success'})"
                                    class="text-gray-400 hover:text-primary transition-colors" title="Salin Data Akses">
                                <i class="ri-file-copy-line text-lg"></i>
                            </button>
                            <button @click="$dispatch('delete-credential', {id: '{{ $cred->id }}' })"
                                    class="text-gray-400 hover:text-primary transition-colors" title="Hapus Credential">
                                <i class="ri-delete-bin-2-fill text-lg"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    {{-- KOLOM KANAN: FORM REGISTRASI AKSES BARU --}}
    <div class="space-y-4">
        <h2 class="text-sm font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider flex items-center gap-2">
            <i class="ri-add-box-line text-primary"></i> Daftarkan Akses Baru
        </h2>

        <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm p-5">
            <form wire:submit="addCredential" class="space-y-3">
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Nama Label</label>
                    <input type="text" wire:model="credLabel" placeholder="Contoh: Repository Git, Admin WP" class="form-input w-full h-10 text-sm rounded-xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:border-primary text-gray-800 dark:text-gray-200" required>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">URL atau Username</label>
                    <input type="text" wire:model="credUrl" placeholder="Contoh: github.com/user atau admin_dev" class="form-input w-full h-10 text-sm rounded-xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:border-primary text-gray-800 dark:text-gray-200" required>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Kata Sandi / Password (Opsional)</label>
                    <input type="text" wire:model="credPass" placeholder="Kosongkan jika hanya link tautan" class="form-input w-full h-10 text-sm rounded-xl border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:border-primary text-gray-800 dark:text-gray-200">
                </div>

                <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white font-bold text-sm h-10 rounded-xl transition-all shadow-sm flex items-center justify-center gap-1.5 pt-0.5">
                    <i class="ri-key-fill"></i> Amankan Kredensial
                </button>
            </form>
        </div>

    </div>

    <x-ui.confirm-delete event="delete-credential" method="deleteCredential" title="Hapus Credential"/>

</div>
