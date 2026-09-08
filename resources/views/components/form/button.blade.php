@props([
    'variant' => 'primary', // primary, secondary, danger, ghost
    'type' => 'submit',
    'loading' => null, // nama method yg di-target wire:loading
    'loadingText' => 'Loading...',
])

@php
    $base = 'inline-flex justify-center items-center gap-2 rounded-lg px-4 py-2 text-sm font-semibold transition disabled:opacity-50 disabled:cursor-not-allowed';

    $variants = [
        'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700',
        'secondary' => 'bg-secondary text-white hover:bg-gray-700',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
        'ghost' => 'bg-transparent text-gray-700 hover:bg-gray-100 border border-gray-300',
    ];

    $classes = $base . ' ' . $variants[$variant];
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => $classes]) }}
    @if($loading)
        wire:loading.attr="disabled"
    wire:target="{{ $loading }}"
    @endif
>
    @if($loading)
        <x-icons.spinner wire:loading wire:target="{{ $loading }}" class="h-4 w-4" />
    @endif

    <span @if($loading) wire:loading.remove wire:target="{{ $loading }}" @endif>
        {{ $slot }}
    </span>

    @if($loading)
        <span wire:loading wire:target="{{ $loading }}">{{ $loadingText }}</span>
    @endif
</button>
