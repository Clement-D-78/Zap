<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function SeanceCinema(){
        return $this->belongsToMany(SeanceCinema::class);
    }
    public function Historique(){
        return $this->belongsToMany(Historique::class);
    }

    public function ActeurFilm(){
        return $this->belongsToMany(ActeurFilm::class);
    }
    public function CategorieFilm(){
        return $this->belongsToMany(CategorieFilm::class);
    }
}
