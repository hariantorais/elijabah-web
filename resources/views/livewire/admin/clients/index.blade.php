<?php

use App\Models\Client;
use App\Livewire\Forms\ClientForm;
use function Livewire\Volt\{with, form, state, on, title, computed};
form(ClientForm::class);

title('List Klien');

state('search', '');

$clients = computed(function(){
    return Client::where('pic_name', 'like', '%' . $this->search . '%')
        ->orWhere('company_name', 'like', '%' . $this->search . '%')->get();
});


on(['client-saved']);

$delete = function ($id) {
    $result = $this->form->destroy($id);
    $this->dispatch('toast', type: $result['type'], message: $result['message']);
};

?>

<div>

    <div class="flex items-center justify-between p-0 mb-4 gap-4">
        <x-form.search-input placeholder="Cari client ..." />
        <a href="#" @click="$dispatch('open-modal', { name: 'modal-form' })"
           class="btn bg-primary text-white">
            <i class="ri-add-line"></i> Tambah Klien
        </a>
    </div>

    <div
        class="overflow-x-auto bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
        <table class="w-full text-left border-collapse">
            <thead>
            <tr class="bg-gray-50 dark:bg-gray-900/50 text-xs font-bold text-gray-500 uppercase tracking-wider">
                <th class="p-4">Perusahaan</th>
                <th class="p-4">Nama PIC</th>
                <th class="p-4">Kontak</th>
                <th class="p-4">Alamat</th>
                <th class="p-4 text-right">Aksi</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 dark:divide-gray-700 text-sm">
            @forelse($this->clients as $client)
                <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-900/20 transition-colors">
                    <td class="p-4 font-bold text-gray-800 dark:text-gray-200">
                        {{ $client->company_name }}
                    </td>
                    <td class="p-4 text-gray-600 dark:text-gray-400">{{ $client->pic_name }}</td>
                    <td class="p-4 space-y-0.5">
                        <div class="flex items-center gap-1.5 text-xs text-gray-500">
                            <i class="ri-mail-line"></i> {{ $client->email }}
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-gray-500">
                            <i class="ri-phone-line"></i> {{ $client->phone }}
                        </div>
                    </td>
                    <td class="p-4 text-gray-500 max-w-xs truncate">{{ $client->address ?? '-' }}</td>
                    <td class="p-4 text-right space-x-1">
                        {{-- Tombol Edit --}}
                        <button
                            type="button"
                            @click="$dispatch('open-modal', { name:'modal-form', id: {{ $client->id }} })"
                            class="text-blue-600 hover:text-blue-900 font-bold text-xs px-2 py-1"
                        >
                            <i class="ri-edit-line"></i> Edit
                        </button>
                        {{-- Tombol Hapus Reusable --}}
                        <button
                            type="button"
                            @click="$dispatch('delete-confirm', { id: {{ $client->id }}, name: '{{ addslashes($client->company_name) }}' })"
                            class="text-red-600 hover:text-red-900 font-bold text-xs px-2 py-1"
                        >
                            <i class="ri-delete-bin-line"></i> Hapus
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="p-8 text-center text-gray-400">Belum ada data klien.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <x-ui.modal name="modal-form" title="Form Klien" maxWidth="4xl">
        <livewire:admin.clients.form />
    </x-ui.modal>

    <x-ui.confirm-delete
        event="delete-confirm"
        title="Hapus Akun Klien?"
    />

</div>
