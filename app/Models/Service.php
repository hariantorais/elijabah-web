<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasUuids;

    protected $fillable = ['name', 'slug', 'description', 'base_price', 'features', 'is_active'];

    protected $casts = [
        'features' => 'array', // Dari JSON di DB ke Array di PHP/JS
        'base_price' => 'float',
        'is_active' => 'boolean',
    ];
}
