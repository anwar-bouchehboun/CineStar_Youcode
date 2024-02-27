<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodayShowing extends Model
{
    use HasFactory;
    protected $fillable = ['film_id', 'salle_id', 'showing_time', 'date'];

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class, 'salle_id');
    }
}

