<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultatsCategories extends Model
{
    use HasFactory;
    protected $table = 'resultats_categories';
    protected $fillable = ['simulation_id', 'categorie_id', 'resultat'];

    public function simulation()
    {
        return $this->belongsTo(Simulation::class);
    }

    public function resultatsSousCategories()
    {
        return $this->hasMany(ResultatsSousCategories::class, 'resultat_categorie_id');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function getOriginalValue()
    {
        // Assuming the original value is stored in a column named 'original_value' in the Categorie model
        return $this->categorie->montant;
    }

    public function getDifference()
    {
        return $this->getOriginalValue() - $this->resultat;
    }
}
