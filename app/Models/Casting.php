<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casting extends Model
{
    use HasFactory;

    public function ActeurFilm(){
        return $this->belongsToMany(ActeurFilm::class);
    }
    public function ActeurSerie(){
        return $this->belongsToMany(ActeurSerie::class);
    }
}
