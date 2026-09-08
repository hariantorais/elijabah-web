<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    public function deleting(Post $post): void
    {
        // Hapus cover_image dari storage
        if ($post->cover_image && Storage::disk('public')->exists($post->cover_image)) {
            Storage::disk('public')->delete($post->cover_image);
        }
    }

    public function updated(Post $post): void
    {
        // Hapus gambar lama kalo user upload gambar baru
        if ($post->isDirty('cover_image')) {
            $oldImage = $post->getOriginal('cover_image');

            if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }
        }
    }
}
