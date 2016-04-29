<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'reservation_id',
        'status',
        'message',
        'exception',
        'currency',
        'currency_paid',
        'price',
        'price_paid',
        'paid',
        'payment_date',
        'ip',
    ];

    public function time()
    {
        return $this->reservation->time();
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
