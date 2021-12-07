<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    public function Episode(){
        return $this->belongsToMany(Episode::class);
    }
    public function CategorieSerie(){
        return $this->belongsToMany(CategorieSerie::class);
    }
    public function ActeurSerie(){
        return $this->belongsToMany(ActeurSerie::class);
    }
}
