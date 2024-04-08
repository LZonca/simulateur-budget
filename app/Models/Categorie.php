<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['categorie_nom', 'categorie_img', 'montant'];

    public function sousCategories()
    {
        return $this->hasMany(SousCategorie::class);
    }
}
