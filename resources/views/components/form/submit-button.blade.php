@props([
    'target' => 'submit',
    'icon' => 'ri-save-3-line',
    'loadingText' => 'Menyimpan...',
    'label' => 'Submit'
])

<button
    type="submit"
    wire:loading.attr="disabled"
    wire:target="{{ $target }}"
    {{ $attributes->merge(['class' => 'btn bg-primary text-white inline-flex items-center justify-center gap-2 transition-all active:scale-[0.98] disabled:opacity-70 disabled:cursor-not-allowed']) }}
>
    <span wire:loading.remove wire:target="{{ $target }}" class="inline-flex items-center gap-2">
        @if($icon)
            <i class="{{ $icon }}"></i>
        @endif
        <span>{{ $label }}</span>
    </span>

    <span wire:loading wire:target="{{ $target }}" class="inline-flex items-center gap-2" style="display: none;">
        <i class="ri-loader-4-line animate-spin"></i>
        <span>{{ $loadingText }}</span>
    </span>
</button>
