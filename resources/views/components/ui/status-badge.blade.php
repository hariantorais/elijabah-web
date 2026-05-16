@props(['status'])

@php
    $config = match ($status) {
        'discussion' => [
            'label' => 'Diskusi',
            'class' =>
                'bg-amber-100 text-amber-700 dark:bg-amber-500/10 dark:text-amber-500 border-amber-200 dark:border-amber-500/20',
        ],
        'on_progress' => [
            'label' => 'Pengerjaan',
            'class' =>
                'bg-blue-100 text-blue-700 dark:bg-blue-500/10 dark:text-blue-500 border-blue-200 dark:border-blue-500/20',
        ],
        'testing' => [
            'label' => 'Uji Coba',
            'class' =>
                'bg-purple-100 text-purple-700 dark:bg-purple-500/10 dark:text-purple-500 border-purple-200 dark:border-purple-500/20',
        ],
        'maintenance' => [
            'label' => 'Pemeliharaan',
            'class' =>
                'bg-gray-100 text-gray-700 dark:bg-gray-500/10 dark:text-gray-400 border-gray-200 dark:border-gray-500/20',
        ],
        'completed' => [
            'label' => 'Selesai',
            'class' =>
                'bg-emerald-100 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-500 border-emerald-200 dark:border-emerald-500/20',
        ],
        default => [
            'label' => $status,
            'class' => 'bg-gray-100 text-gray-600',
        ],
    };
@endphp

<span
    {{ $attributes->merge(['class' => 'inline-flex items-center gap-x-1.5 py-1 px-3 rounded-full text-xs font-medium border ' . $config['class']]) }}>
    <svg class="h-1.5 w-1.5 fill-current" viewBox="0 0 6 6" aria-hidden="true">
        <circle cx="3" cy="3" r="3" />
    </svg>
    {{ $config['label'] }}
</span>
