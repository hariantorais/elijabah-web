@props([
    'label' => null,
    'name' => null,
    'existing' => null,
    'required' => false,
])

<div class="space-y-2 mb-6">
    @if ($label)
        <label class="font-semibold text-gray-500">
            {{ $label }}
            @if ($required) <span class="text-red-500">*</span> @endif
        </label>
    @endif

    @if($existing && !$attributes->wire('model')->value())
        <img src="{{ Storage::url($existing) }}" class="h-32 w-full object-cover rounded-lg">
    @endif

    <input type="file"
           @if (!$attributes->has('wire:model')) wire:model="{{ $name }}" @endif
        {{ $attributes->merge(['class' => 'block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100']) }}>

    <div wire:loading wire:target="{{ $attributes->wire('model')->value() }}" class="text-sm text-gray-500">Uploading...</div>

    @error($name)
    <p class="text-sm text-red-500 mt-1 italic">{{ $message }}</p>
    @enderror
</div>
