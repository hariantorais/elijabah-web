@props([
    'label' => null,
    'placeholder' => 'Pilih Opsi',
    'required' => false,
    'name' => null,
    'options' => [],
    'inline' => false,
])

<div class="{{ $inline ? 'grid grid-cols-1 md:grid-cols-4 items-center gap-2 md:gap-6' : 'space-y-2' }} mb-6">
    @if ($label)
        <label for="{{ $name }}" class="font-semibold text-gray-500">
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <div class="{{ $inline ? 'md:col-span-3' : '' }} relative">
        <select id="{{ $name }}" name="{{ $name }}" {{ $required ? 'required' : '' }}
            @if (!$attributes->has('wire:model') && !$attributes->has('wire:model.live')) wire:model.live="{{ $name }}" @endif
            {{ $attributes->merge(['class' => 'form-select w-full']) }}>

            @if ($placeholder)
                <option value="">{{ $placeholder }}</option>
            @endif
            @foreach ($options as $value => $lbl)
                <option value="{{ $value }}">{{ $lbl }}</option>
            @endforeach
            {{ $slot }}
        </select>

        @error($name)
            <p class="text-sm text-red-500 mt-1 italic">{{ $message }}</p>
        @enderror
    </div>
</div>
