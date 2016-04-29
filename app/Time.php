<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = [
        'date',
        'time',
        'slots',
        'status',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function payment()
    {
        return $this->reservation->payment();
    }
}
