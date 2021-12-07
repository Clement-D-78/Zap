<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeanceCinema extends Model
{
    use HasFactory;

    public function film(){
        return $this->belongsTo(Film::class);
    }
    public function place(){
        return $this->belongsToMany(Place::class);
    }

}
