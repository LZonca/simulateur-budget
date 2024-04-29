<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousSousCategorie extends Model
{
    use HasFactory;

    protected $fillable = ['sous_sous_categorie_nom', 'sous_categorie_id', 'montant'];

    public function results()
    {
        return $this->hasMany(SimulationResult::class);
    }
    public function sousCategorie()
    {
        return $this->belongsTo(SousCategorie::class, 'sous_categorie_id');
    }
}
