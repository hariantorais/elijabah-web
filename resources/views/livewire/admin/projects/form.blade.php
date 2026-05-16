<?php

use function Livewire\Volt\{form, computed, state, on};
use App\Livewire\Forms\ProjectForm;
use App\Models\{Package, Client, User};
use Carbon\Carbon;

// 1. Inisialisasi Form Object
form(ProjectForm::class);

// 2. State Internal Volt
state(['auto_budget' => true]);

// 3. Ambil Data Master (Computed)
$clients = computed(fn() => Client::orderBy('company_name')->get());
$packages = computed(fn() => Package::all());
$pms = computed(fn() => User::where('role', 'admin')->get());

/**
 * Otomatisasi 1: Mengisi Budget saat Paket Berubah
 */
$updatedFormPackageId = function ($value) {
    if ($value && $this->auto_budget) {
        $package = Package::find($value);
        if ($package) {
            $this->form->total_budget = $package->price;
        }
    }
};


on(['open-modal' => function ($id = null) {

    $this->form->reset();

    if (!$id) return;

    $project = \App\Models\Project::find($id);
    if ($project) {
        $this->form->setProject($project);
        $this->auto_budget = false;
    }
}]);

$submit = function () {
    $statusAction = $this->form->save();

    $this->dispatch('close-modal');
    $this->dispatch('project-saved');

    $message = $statusAction === 'updated'
        ? 'Perubahan data proyek berhasil diperbarui.'
        : 'Proyek baru telah sukses didaftarkan.';

    $this->dispatch('toast', message: $message, type: 'success');

    $this->form->reset();
};
?>


<form wire:submit="submit">
    <div
        class="grid grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="space-y-1">

            <x-form.select
                label="Paket"
                name="form.package_id"
                wire:model.live="form.package_id"
                :options="$this->packages->pluck('name', 'id')"
                inline required
            />


            <x-form.input label="Judul Proyek" name="form.title" placeholder="Nama Proyek..." inline required />

            <x-form.select
                label="Klien"
                name="form.client_id"
                :options="$this->clients->pluck('company_name', 'id')"
                inline required
            />


            <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-6 mb-6">
                <label class="font-semibold text-gray-500 text-sm">Total Budget</label>
                <div class="md:col-span-3">
                    <div class="relative">
                        <input type="number" wire:model="form.total_budget"
                               class="form-input w-full pl-10 {{ $auto_budget ? 'bg-gray-50 text-gray-500' : '' }}"
                            {{ $auto_budget ? 'readonly' : '' }}>
                    </div>

                </div>
            </div>
        </div>

        <div class="space-y-1">

            <x-form.select
                label="Project Manager"
                name="form.pm_id"
                placeholder="Pilih PM..."
                :options="$this->pms->pluck('name', 'id')"
                inline
            />

            <x-form.input
                label="Mulai"
                name="form.start_date"
                type="date"
                inline
            />

            <x-form.input label="Deadline" name="form.deadline" type="date" inline />

            <x-form.select label="Status" name="form.status" inline required>
                <option value="discussion">Discussion</option>
                <option value="on_progress">On Progress</option>
                <option value="testing">Testing</option>
                <option value="mantenance">Maintenance</option>
                <option value="completed">Completed</option>
            </x-form.select>

            <x-form.textarea label="Catatan" name="form.description" rows="3" inline />
        </div>
    </div>

    {{-- Footer Buttons --}}
    <div class="flex justify-end mt-3 gap-3">
        <button type="button" x-on:click="show = false" class="btn bg-light">
            Batal
        </button>
        <x-form.submit-button />
    </div>
</form>

