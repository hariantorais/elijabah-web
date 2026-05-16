@props([
    'placeholder' => 'Cari data ...',
])

<div class="relative flex-1 max-w-xs bg-white">
    <label for="search" class="sr-only">Cari</label>
    <input wire:model.live.debounce.300ms="search" type="text" id="search"
           class="form-input ps-10 block w-full border-gray-200 focus:border-primary focus:ring-primary dark:bg-gray-900 dark:border-gray-700"
           placeholder="{{ $placeholder }}">
    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
        <i class="ri-search-line text-gray-400"></i>
    </div>
</div>
