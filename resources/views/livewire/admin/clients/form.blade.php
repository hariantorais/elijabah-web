<?php

use App\Livewire\Forms\ClientForm;
use function Livewire\Volt\{state, form, on};

form(ClientForm::class);

on(['open-modal' => function ($id = null) {
    $client = \App\Models\Client::find($id);
    if ($client) {
        $this->form->setClient($client);
    }
}]);

$submit = function () {
    $action = $this->form->save();

    $this->dispatch('client-saved');
    $this->dispatch('close-modal');

    $message = $action === 'updated'
        ? 'Data klien berhasil diperbarui.'
        : 'Klien baru berhasil didaftarkan.';

    $this->dispatch('toast', message: $message, type: 'success');

    $this->form->reset();
};

?>

<form wire:submit="submit">
    <x-form.input label="Nama Perusahaan" name="form.company_name" placeholder="PT. ABC Digital..." required />
    <x-form.input label="Nama PIC / Kontak Utama" name="form.pic_name" placeholder="Budi Santoso..." required />

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <x-form.input label="Email Perusahaan" name="form.email" type="email" placeholder="info@company.com" required />
        <x-form.input label="No. Telepon / WA" name="form.phone" placeholder="0812..." required />
    </div>

    <x-form.textarea label="Alamat Kantor" name="form.address" rows="3" placeholder="Alamat lengkap..." />

    <x-form.modal-button />
</form>
