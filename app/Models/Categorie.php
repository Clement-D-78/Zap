<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public function CategorieFilm(){
        return $this->belongsToMany(CategorieFilm::class);
    }

    public function CategorieSerie(){
        return $this->belongsToMany(CategorieSerie::class);
    }
}
