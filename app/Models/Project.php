<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasUuids;
    protected $fillable = ['client_id', 'service_id', 'title', 'status', 'final_price', 'deadline'];

    // Relasi
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function credentials()
    {
        return $this->hasMany(Credential::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    protected $appends = ['formatted_price'];

    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->final_price, 0, ',', '.');
    }
}
