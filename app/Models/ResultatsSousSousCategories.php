<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultatsSousSousCategories extends Model
{
    use HasFactory;

    protected $fillable = ['simulation_id', 'sous_sous_categorie_id', 'resultat'];

    public function simulation()
    {
        return $this->belongsTo(Simulation::class);
    }

    public  function resultatSousCategorie()
    {
        return $this->belongsTo(ResultatsSousCategories::class);
    }

    public function sousSousCategorie()
    {
        return $this->belongsTo(SousSousCategorie::class);
    }
}
