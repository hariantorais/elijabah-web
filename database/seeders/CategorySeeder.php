<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder {
    public function run(): void {
        $cats = [
            'Dasar Website',
            'Manfaat Website',
            'Panduan Bisnis Online',
            'Tips & Tutorial',
            'Studi Kasus',
            'Tanya Jawab',
        ];

        foreach ($cats as $cat) {
            Category::create([
                'name' => $cat,
                'slug' => Str::slug($cat)
            ]);
        }
    }
}
