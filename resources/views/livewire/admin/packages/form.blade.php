<?php

use function Livewire\Volt\{form, on};
use App\Livewire\Forms\PackageForm;
use App\Models\Package;

form(PackageForm::class);

/**
 * Listener untuk mode TAMBAH BARU
 */
on(['reset-package-form' => function () {
    $this->form->reset();
    $this->form->package = null;
    $this->resetErrorBag();
}]);


on(['open-modal' => function ($id = null) {
    $this->resetErrorBag();
    $package = Package::find($id);
    if ($package) {
        $this->form->setPackage($package);
    }
}]);

$submit = function () {
    $res = $this->form->save();
    $this->dispatch('package-saved');
    $this->dispatch('toast', type: $res['type'], message: $res['message']);
    $this->dispatch('close-modal');
    $this->form->reset();
};

?>

<form wire:submit="submit" class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-form.input label="Nama Paket" name="form.name" placeholder="SaaS MVP Development..." required />
        <x-form.input label="Urutan Tampilan (Order)" name="form.order" type="number" placeholder="0" required />
    </div>

    <x-form.textarea label="Deskripsi Singkat" name="form.description" rows="2"
                     placeholder="Paket pembuatan aplikasi sistem..." required />

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <x-form.input label="Harga Utama (IDR)" name="form.price" type="number" placeholder="15000000" required />
        <x-form.input label="Harga Coret / Asli" name="form.original_price" type="number" placeholder="20000000" />
        <x-form.input label="Label Diskon" name="form.discount_label" placeholder="Diskon Awal Tahun / Hemat 25%" />
    </div>

    {{-- Input Fitur Per Baris --}}
    <div>
        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-1">Fitur Utama (Satu fitur per
            baris)</label>
        <textarea
            wire:model="form.features"
            rows="4"
            class="form-input w-full rounded-xl border-gray-200 text-sm focus:border-teal-500 focus:ring-teal-500"
            placeholder="Contoh:&#10;Gratis Hosting 1 Tahun&#10;Integrasi Payment Gateway&#10;Pengerjaan 14 Hari Kerja"
        ></textarea>
        @error('form.features') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-form.input label="Teks Tombol CTA" name="form.cta_text" placeholder="Pesan Sekarang" />
        <x-form.input label="Link Custom CTA" name="form.cta_link" placeholder="https://wa.me/..." />
    </div>

    {{-- Checkbox Popular Pilihan Premium --}}
    <div class="flex items-center">
        <label class="inline-flex items-center cursor-pointer">
            <input type="checkbox" wire:model="form.is_popular" class="sr-only peer">
            <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-teal-500"></div>
            <span class="ms-3 text-sm font-semibold text-gray-700 dark:text-gray-300">Rekomendasikan sebagai Paket Terpopuler (Popular Badge)</span>
        </label>
    </div>

    <x-form.modal-button/>
</form>
