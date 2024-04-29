<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultatsSousCategories extends Model
{
    use HasFactory;

    protected $fillable = ['simulation_id', 'sous_categorie_id', 'resultat'];

    public function simulation()
    {
        return $this->belongsTo(Simulation::class);
    }

    public function resultatsSousCategories()
    {
        return $this->hasMany(ResultatsSousCategories::class, 'resultat_categorie_id');
    }

    public function resultatCategorie()
    {
        return $this->belongsTo(ResultatsCategories::class, 'resultat_categorie_id');
    }

    public function sousCategorie()
    {
        return $this->belongsTo(SousCategorie::class);
    }

    public function getOriginalValue()
    {
        // Assuming the original value is stored in a column named 'montant' in the SousCategorie model
        return $this->sousCategorie->montant;
    }

    public function getDifference()
    {
        return $this->getOriginalValue() - $this->resultat;
    }
}
