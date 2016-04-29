<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'comment',
        'time_id',
    ];

    public function time()
    {
        return $this->belongsTo(Time::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
