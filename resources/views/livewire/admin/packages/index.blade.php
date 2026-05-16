<?php

use function Livewire\Volt\{computed, form, on};
use App\Models\Package;
use App\Livewire\Forms\PackageForm;

form(PackageForm::class);

on(['package-saved']);

$packages = computed(function (){
    return Package::orderBy('order')->get();
});

$delete = function ($id) {
    $res = $this->form->destroy($id);
    $this->dispatch('toast', type: $res['type'], message: $res['message']);
};

?>

<div class="p-6 space-y-6" x-data="{ openModalForm: false }" @close-package-modal.window="openModalForm = false">

    <div class="flex justify-between items-center">
        <x-form.search-input/>
        <button
            @click="$dispatch('open-modal', {name: 'modal-form'});"
            class="btn bg-primary text-white">
            <i class="ri-add-fill"></i> Tambah Paket
        </button>
    </div>

    {{-- TABEL TAMPILAN DATA --}}
    <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
        <table class="w-full text-left border-collapse">
            <thead>
            <tr class="bg-gray-50 dark:bg-gray-900/50 text-xs font-bold text-gray-500 uppercase tracking-wider">
                <th class="p-4 w-12 text-center">#</th>
                <th class="p-4">Nama Paket</th>
                <th class="p-4">Harga Komersial</th>
                <th class="p-4">Fitur Utama</th>
                <th class="p-4">Badge</th>
                <th class="p-4 text-right">Aksi</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 dark:divide-gray-700 text-sm">
            @forelse($this->packages as $package)
                <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-900/20 transition-colors">
                    <td class="p-4 text-center font-bold text-gray-400">{{ $package->order }}</td>
                    <td class="p-4">
                        <div class="font-bold text-gray-800 dark:text-gray-200">{{ $package->name }}</div>
                        <div class="text-xs text-gray-400 max-w-xs truncate">{{ $package->description }}</div>
                    </td>
                    <td class="p-4">
                        <div class="font-bold text-teal-600">IDR {{ number_format($package->price, 0, ',', '.') }}</div>
                        @if($package->original_price)
                            <div class="text-xs text-gray-400 line-through">IDR {{ number_format($package->original_price, 0, ',', '.') }}</div>
                        @endif
                    </td>
                    <td class="p-4">
                            <span class="text-xs px-2 py-1 bg-gray-100 text-gray-600 rounded-md font-medium">
                                {{ is_array($package->features) ? count($package->features) : 0 }} Fitur include
                            </span>
                    </td>
                    <td class="p-4">
                        @if($package->is_popular)
                            <span class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-amber-100 text-amber-800 border border-amber-200 uppercase tracking-wider">Popular</span>
                        @else
                            <span class="text-gray-300">-</span>
                        @endif
                    </td>
                    <td class="p-4 text-right space-x-1">
                        <button
                            type="button"
                            @click="$dispatch('open-modal', { name:'modal-form', id: {{ $package->id }} }); openModalForm = true;"
                            class="text-blue-600 hover:text-blue-900 font-bold text-xs px-2 py-1"
                        >
                            <i class="ri-edit-line"></i> Edit
                        </button>
                        <button
                            type="button"
                            @click="$dispatch('delete-cofirm', { id: {{ $package->id }}, name: '{{ addslashes($package->name) }}' })"
                            class="text-red-600 hover:text-red-900 font-bold text-xs px-2 py-1"
                        >
                            <i class="ri-delete-bin-line"></i> Hapus
                        </button>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="p-8 text-center text-gray-400">Belum ada paket layanan terdaftar.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>

   <x-ui.modal name="modal-form" maxWidth="4xl">
       <livewire:admin.packages.form />
   </x-ui.modal>

    <x-ui.confirm-delete event="delete-cofirm" title="Hapus Paket Komersial?" />

</div>
