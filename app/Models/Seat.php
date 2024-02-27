<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
    public function Reserve()
    {
        return $this->hasMany(Reserve::class, 'seat_id');
    }
}
