@props([
    'title',
    'value',
    'icon',
    'variant' => 'blue'
])

@php
    // Pemetaan varian warna secara dinamis agar kode HTML di bawah tetap bersih
    $theme = [
        'blue' => [
            'bg' => 'bg-blue-500/10',
            'text' => 'text-blue-600',
            'value' => 'text-gray-900 dark:text-white'
        ],
        'emerald' => [
            'bg' => 'bg-emerald-500/10',
            'text' => 'text-emerald-600',
            'value' => 'text-emerald-600 dark:text-emerald-400'
        ],
        'red' => [
            'bg' => 'bg-red-500/10',
            'text' => 'text-red-600',
            'value' => 'text-red-600 dark:text-red-500'
        ]
    ][$variant] ?? $theme['blue'];
@endphp

<div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm p-5 flex items-center gap-4">
    <div class="h-11 w-11 rounded-xl {{ $theme['bg'] }} {{ $theme['text'] }} flex items-center justify-center text-2xl flex-shrink-0">
        <i class="{{ $icon }}"></i>
    </div>
    <div class="min-w-0">
        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">{{ $title }}</p>
        <p class="text-base font-black {{ $theme['value'] }} truncate">
            IDR {{ number_format($value, 0, ',', '.') }}
        </p>
    </div>
</div>
