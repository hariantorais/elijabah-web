<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

new class extends Component {
    use WithPagination;

    public $search = '';
    public $status = ''; // '', 'published', 'draft'

    public function with(): array {
        return [
            'posts' => Post::query()
                ->with('category', 'author')
                ->when($this->search, fn($q) => $q->where('title', 'like', "%{$this->search}%"))
                ->when($this->status === 'published', fn($q) => $q->whereNotNull('published_at'))
                ->when($this->status === 'draft', fn($q) => $q->whereNull('published_at'))
                ->latest()
                ->paginate(10)
        ];
    }

    public function delete(Post $post) {
        if ($post->cover_image) {
            Storage::disk('public')->delete($post->cover_image);
        }
        $post->delete();
        session()->flash('success', 'Post berhasil dihapus');
    }

    public function togglePublish(Post $post) {
        $post->update([
            'published_at' => $post->published_at ? null : now()
        ]);
    }
}; ?>

<div class="p-6">
    <div class="sm:flex sm:items-center sm:justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Kelola Artikel Blog</h1>
        <a href="{{ route('admin.posts.create') }}"
           class="inline-flex items-center gap-x-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" /></svg>
            Tulis Artikel
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 rounded-lg bg-green-50 p-4 text-sm text-green-800">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm">
        <div class="p-4 border-b border-gray-200 flex flex-col sm:flex-row gap-3">
            <input wire:model.live.debounce.300ms="search" type="text"
                   placeholder="Cari judul artikel..."
                   class="w-full sm:w-80 rounded-lg border-gray-300 text-sm">
            <select wire:model.live="status" class="rounded-lg border-gray-300 text-sm">
                <option value="">Semua Status</option>
                <option value="published">Published</option>
                <option value="draft">Draft</option>
            </select>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Views</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($posts as $post)
                    <tr wire:key="{{ $post->id }}">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <img src="{{ $post->cover_image ? Storage::url($post->cover_image) : 'https://placehold.co/80x60' }}"
                                     class="h-12 w-16 rounded object-cover">
                                <div>
                                    <div class="font-medium text-gray-900">{{ Str::limit($post->title, 40) }}</div>
                                    <div class="text-sm text-gray-500">by {{ $post->author->name }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $post->category?->name ?? '-' }}</td>
                        <td class="px-6 py-4">
                            @if($post->published_at)
                                <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700">Published</span>
                            @else
                                <span class="inline-flex items-center rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600">Draft</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ number_format($post->views) }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $post->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <button wire:click="togglePublish({{ $post->id }})"
                                    class="text-sm {{ $post->published_at ? 'text-orange-600' : 'text-green-600' }} hover:underline">
                                {{ $post->published_at ? 'Unpublish' : 'Publish' }}
                            </button>
                            <a href="{{ route('admin.posts.edit', $post) }}" class="text-sm text-indigo-600 hover:underline">Edit</a>
                            <button wire:click="delete({{ $post->id }})"
                                    wire:confirm="Yakin hapus artikel ini?"
                                    class="text-sm text-red-600 hover:underline">Hapus</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center text-sm text-gray-500">
                            Belum ada artikel. <a href="{{ route('admin.posts.create') }}" class="text-indigo-600">Buat yang pertama</a>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="p-4 border-t border-gray-200">
            {{ $posts->links() }}
        </div>
    </div>
</div>
