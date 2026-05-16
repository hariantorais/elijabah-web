@props([
    'label' => null,
    'type' => 'text',
    'placeholder' => '',
    'required' => false,
    'name' => null,
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
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
            placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}
            @if (!$attributes->has('wire:model') && !$attributes->has('wire:model.live')) wire:model.live="{{ $name }}" @endif
            {{ $attributes->merge([
                'class' =>
                    'form-input w-full transition-all ' .
                    ($errors->has($name) ? '!border-red-500 !ring-red-500' : 'focus:border-primary'),
            ]) }}>

        @error($name)
            <p class="text-sm text-red-500 mt-1 italic">{{ $message }}</p>
        @enderror
    </div>
</div>
