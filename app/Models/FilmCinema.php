<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmCinema extends Model
{
    use HasFactory;
    public function avis(){
        return $this->belongsToMany(Avis::class);
    }
}
