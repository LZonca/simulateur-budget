<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousSousCategorie extends Model
{
    use HasFactory;

    protected $fillable = ['sous_sous_categorie_nom', 'categorie_id'];


    public function owner()
    {
        return $this->belongsTo(SousCategorie::class, 'sous_categorie_id');
    }
}
