<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Facades\Storage;

class PostForm extends Form
{
    public ?Post $post = null;

    #[Validate('required|min:10|max:255')]
    public $title = '';

    #[Validate('required|min:50')]
    public $content = '';

    #[Validate('required|exists:categories,id')]
    public $category_id = '';

    #[Validate('nullable|image|max:2048')]
    public $cover_image;

    public $existing_cover = null;
    public $published_at = null;

    public $excerpt = '';
    public $meta_title = '';
    public $meta_description = '';

    public function setPost(Post $post): void
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->category_id = $post->category_id;
        $this->existing_cover = $post->cover_image;
        $this->published_at = $post->published_at;
    }

    // INI METHOD YANG HILANG
    protected function generateSeoData(): array
    {
        $plainContent = strip_tags($this->content);

        return [
            'excerpt' => Str::limit($plainContent, 150),
            'meta_title' => Str::limit($this->title, 60),
            'meta_description' => Str::limit($plainContent, 160),
        ];
    }

    public function store()
    {
        $this->validate();

        $seo = $this->generateSeoData(); // Kepanggil disini

        $data = $this->only(['title', 'content', 'category_id']);
        $data['user_id'] = auth()->id();
        $data['slug'] = Str::slug($this->title). '-'. Str::lower(Str::random(5));
        $data['excerpt'] = $seo['excerpt'];
        $data['meta_title'] = $seo['meta_title'];
        $data['meta_description'] = $seo['meta_description'];
        $data['published_at'] = $this->published_at;

        if ($this->cover_image instanceof TemporaryUploadedFile) {
            $data['cover_image'] = $this->cover_image->store('posts', 'public');
        }

        Post::create($data);
        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $seo = $this->generateSeoData(); // Dan disini

        $data = $this->only(['title', 'content', 'category_id']);
        $data['excerpt'] = $seo['excerpt'];
        $data['meta_title'] = $seo['meta_title'];
        $data['meta_description'] = $seo['meta_description'];
        $data['published_at'] = $this->published_at;

        if ($this->cover_image instanceof TemporaryUploadedFile) {
            if ($this->post->cover_image) {
                Storage::disk('public')->delete($this->post->cover_image);
            }
            $data['cover_image'] = $this->cover_image->store('posts', 'public');
        }

        $this->post->update($data);
    }
}
