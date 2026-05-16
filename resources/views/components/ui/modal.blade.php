@props(['name', 'title' => '', 'maxWidth' => '2xl'])

@php
    /**
     * Konfigurasi Lebar Maksimal Modal
     * 4xl adalah ukuran ideal untuk form dua kolom.
     */
    $maxWidth =
        [
            'sm' => 'sm:max-w-sm',
            'md' => 'sm:max-w-md',
            'lg' => 'sm:max-w-lg',
            'xl' => 'sm:max-w-xl',
            '2xl' => 'sm:max-w-2xl',
            '3xl' => 'sm:max-w-3xl',
            '4xl' => 'sm:max-w-4xl',
            '5xl' => 'sm:max-w-5xl',
            'full' => 'sm:max-w-full sm:mx-4',
        ][$maxWidth] ?? 'sm:max-w-2xl';
@endphp

<div x-data="{
    show: false,
    name: '{{ $name }}',
    focusables() {
        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])';
        return [...$el.querySelectorAll(selector)].filter(el => !el.hasAttribute('disabled'));
    },
    firstFocusable() { return this.focusables()[0] },
    lastFocusable() { return this.focusables().slice(-1)[0] },
    nextFocusable() { return this.focusables()[this.focusables().indexOf(document.activeElement) + 1] || (this.firstFocusable()) },
    prevFocusable() { return this.focusables()[this.focusables().indexOf(document.activeElement) - 1] || (this.lastFocusable()) },
}" x-init="$watch('show', value => {
    if (value) {
        document.body.classList.add('overflow-y-hidden');
        {{-- Auto focus ke input pertama saat modal buka --}}
        setTimeout(() => firstFocusable()?.focus(), 50);
    } else {
        document.body.classList.remove('overflow-y-hidden');
    }
})" x-on:open-modal.window="show = ($event.detail.name === name)"
     x-on:close-modal.window="show = false" x-on:keydown.escape.window="show = false"
     x-on:keydown.tab.prevent="$event.shiftKey ? prevFocusable().focus() : nextFocusable().focus()" x-show="show"
     class="fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0" style="display: none;">
    {{-- Overlay / Backdrop (Instan tanpa transisi) --}}
    <div x-show="show" class="fixed inset-0 transform transition-none" x-on:click="show = false">
        <div class="absolute inset-0 bg-gray-900/60 backdrop-blur-sm"></div>
    </div>

    {{-- Konten Modal --}}
    <div x-show="show"
         class="mb-6 bg-white dark:bg-gray-800 rounded-xl shadow-2xl transform transition-none overflow-hidden mx-auto {{ $maxWidth }}">
        {{-- Header --}}
        @if ($title)
            <div
                class="px-6 py-4 border-b border-gray-100 dark:border-gray-700 flex items-center justify-between bg-white dark:bg-gray-800 sticky top-0 z-10">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                    {{ $title }}
                </h3>
                <button x-on:click="show = false"
                        class="h-8 w-8 flex items-center justify-center rounded-full text-gray-400 hover:bg-gray-100 hover:text-gray-600 dark:hover:bg-gray-700 transition-colors">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </div>
        @endif

        {{-- Body --}}
        <div class="relative">
            <div class="overflow-hidden bg-white dark:bg-gray-800 rounded-xl p-5">
                {{ $slot }}
            </div>
        </div>

        {{-- Footer (Opsional) --}}
        @if (isset($footer))
            <div
                class="px-6 py-4 bg-gray-50 dark:bg-gray-900/20 border-t border-gray-100 dark:border-gray-700 flex justify-end gap-3">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>
