@props([
    'label_submit' => 'Submit',
    'label_cancel' => 'Batal',
    'target' => 'submit'
])

<div class="pt-4 flex justify-end gap-1">
    <button type="button" x-on:click="show = false" class="btn bg-light">
        Batal
    </button>
    <x-form.submit-button label="{{ $label_submit }}" target="{{ $target }}" />
</div>
