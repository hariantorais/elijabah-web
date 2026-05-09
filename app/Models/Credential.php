<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use HasUuids;
    protected $fillable = ['project_id', 'label', 'url', 'username', 'password'];

    protected $casts = [
        'password' => 'encrypted',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
