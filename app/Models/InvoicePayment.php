<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoicePayment extends Model
{
    protected $guarded = [];

    protected $casts = [
        'payment_date' => 'date',
        'amount' => 'integer'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
