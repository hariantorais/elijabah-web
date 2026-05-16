<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    protected $guarded = [];
    protected $casts = [
        'features' => 'array',
        'price' => 'decimal:2',
        'original_price' => 'decimal:2',
        'is_popular' => 'boolean',
        'workflow_template' => 'array',
    ];
}
