<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $fillable = ['salle_id', 'zone_name'];

    public function salle()
    {
        return $this->belongsTo(Salle::class, 'salle_id');
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
