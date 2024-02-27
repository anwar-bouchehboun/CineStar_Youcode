<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'today_showing_id',
        'salle_id',
        'seat_id',
        'reservation_time',
    ];

    // Define the relationship with Salle
    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }


    // Define the relationship with Seat
    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }

    public function TodayShowing()
    {
        return $this->belongsTo(TodayShowing::class);
    }

}

