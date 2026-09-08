@props(['label' => '', 'required' => false])

<div
    wire:ignore
    x-data="{
        value: @entangle($attributes->wire('model')),
        init() {
            // Load isi dari DB ke Trix pas edit
            this.$nextTick(() => {
                if (this.$refs.trix.editor && this.value) {
                    this.$refs.trix.editor.loadHTML(this.value)
                }
            })

            // Tiap ngetik di Trix, update ke Livewire
            this.$refs.trix.addEventListener('trix-change', () => {
                this.value = this.$refs.input.value
            })
        }
    }"
    x-init="init()"
    {{ $attributes->whereDoesntStartWith('wire:model') }}
>
    @if($label)
        <label class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }} @if($required)<span class="text-red-500">*</span>@endif
        </label>
    @endif

    <input x-ref="input" id="{{ $attributes->wire('model')->value }}" type="hidden" {{ $attributes->wire('model') }}>
    <trix-editor x-ref="trix" input="{{ $attributes->wire('model')->value }}" class="trix-content"></trix-editor>

    @error($attributes->wire('model')->value)
    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
