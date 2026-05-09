<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasUuids;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company_name',
        'address',
        'internal_notes'
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
