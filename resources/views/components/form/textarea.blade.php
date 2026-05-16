@props([
    'label' => null,
    'placeholder' => '',
    'required' => false,
    'name' => null,
    'rows' => 3,
])

<div class="mb-6 space-y-2">
    @if ($label)
        <label for="{{ $name }}" class="font-semibold text-gray-500">
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <div class="relative">
        <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}"
            {{ $required ? 'required' : '' }} @if (!$attributes->has('wire:model') && !$attributes->has('wire:model.live')) wire:model.live="{{ $name }}" @endif
            {{ $attributes->merge([
                'class' =>
                    'form-input w-full transition-all ' .
                    ($errors->has($name)
                        ? '!border-red-500 !ring-red-500 !ring-1 focus:!ring-red-500 focus:!border-red-500 !text-red-900'
                        : 'focus:border-primary focus:ring-primary/20'),
            ]) }}></textarea>

        @error($name)
            <div class="pointer-events-none absolute top-3 right-3 flex items-center">
                <i class="ri-error-warning-fill text-xl text-red-500"></i>
            </div>
        @enderror
    </div>

    @error($name)
        <p class="text-sm text-red-500 mt-1 italic">{{ $message }}</p>
    @enderror
</div>
