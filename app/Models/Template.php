<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $guarded = [];

    // Casting JSON ke Array agar mudah diolah di Frontend (React/Inertia)
    protected $casts = [
        'palette' => 'array',
        'is_active' => 'boolean',
    ];
}
