<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $fillable = ['saleName', 'capacite'];

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }
}
