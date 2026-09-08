<?php

use Livewire\Volt\Component;
use App\Livewire\Forms\PostForm;
use App\Models\Post;
use App\Models\Category;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public PostForm $form;
    public bool $publish = false;

    public function mount(Post $post): void
    {
        if ($post->exists) {
            $this->form->setPost($post);
        }
    }

    public function save()
    {
        $this->form->published_at = $this->publish ? now() : null;

        try {
            if ($this->form->post) {
                $this->form->update();
                $this->dispatch('toast', type: 'success', message: "Artikel berhasil diupdate!");
            } else {
                $this->form->store();
                $this->dispatch('toast', type: 'success', message: "Artikel berhasil dibuat!");
                return $this->redirect(route('admin.posts.index'));
            }

        } catch (\Exception $e) {
            $this->dispatch('toast', message: 'Gagal: ' . $e->getMessage(), type: 'error');
        }
    }

    public function with(): array
    {
        return [
            'categories' => Category::pluck('name', 'id'),
            'isEdit' => $this->form->post?->exists ?? false,
        ];
    }
}; ?>

<div>
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">
            {{ $isEdit? 'Edit Artikel' : 'Tulis Artikel Baru' }}
        </h1>
        <a href="{{ route('admin.posts.index') }}" class="text-sm text-gray-600 hover:text-gray-900">← Kembali</a>
    </div>

    <form wire:submit="save" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2">
            <div class="bg-white p-6 rounded-xl border border-gray-200 space-y-6">
                <x-form.input label="Judul Artikel" name="form.title" required />

                {{-- 1. GANTI BAGIAN INI: HAPUS DIV LAMA, PAKE x-data --}}
                <div
                    wire:ignore
                    x-data="{
                        content: @entangle('form.content').live,
                        initTrix() {
                            let editor = this.$refs.trix;
                            this.$nextTick(() => {
                                if (editor.editor && this.content) {
                                    editor.editor.loadHTML(this.content);
                                }
                            });
                            editor.addEventListener('trix-change', () => {
                                this.content = editor.value;
                            });
                        }
                    }"
                    x-init="initTrix()"
                >
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Konten <span class="text-red-500">*</span>
                    </label>
                    <input x-ref="input" id="trix-content" type="hidden" wire:model="form.content">
                    <trix-editor x-ref="trix" input="trix-content" class="trix-content min-h-"></trix-editor>
                    @error('form.content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                {{-- SAMPAI SINI YG DIGANTI --}}

            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-xl border border-gray-200">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Publikasi</h3>
                <div class="mb-3 flex items-center justify-between text-sm">
                    <span class="text-gray-700">Status:</span>
                    <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium
                        {{ $form->published_at? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ $form->published_at? 'Published' : 'Draft' }}
                    </span>
                </div>
                <div class="space-y-3">
                    <x-form.button
                        type="submit"
                        variant="secondary"
                        wire:click="$set('publish', false)"
                        loading="save"
                        loading-text="Menyimpan..."
                        class="w-full"
                    >
                        Simpan Draft
                    </x-form.button>

                    <x-form.button
                        type="submit"
                        variant="primary"
                        wire:click="$set('publish', true)"
                        loading="save"
                        loading-text="{{ $isEdit? 'Mengupdate...' : 'Publish...' }}"
                        class="w-full"
                    >
                        {{ $isEdit? 'Update' : 'Publish Sekarang' }}
                    </x-form.button>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-200 space-y-6">
                <x-form.select label="Kategori" name="form.category_id" :options="$categories" required />
                <x-form.file-upload label="Cover Image" name="form.cover_image" :existing="$form->existing_cover" />
            </div>
        </div>
    </form>
</div>

