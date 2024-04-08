<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;

    protected $fillable = ['sous_categorie_nom', 'categorie_id', 'montant'];


    public function owner()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function sousSousCategories()
    {
        return $this->hasMany(SousSousCategorie::class);
    }
    // Reste du modèle...
}

