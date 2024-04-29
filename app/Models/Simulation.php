<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    use HasFactory;

    protected $fillable = ['simulation_nom', 'simulations_date', 'utilisateur_id', 'available_budget'];

    public function user()
    {
        return $this->belongsTo(User::class, 'utilisateur_id');
    }

    public function resultatsCategories()
    {
        return $this->hasMany(ResultatsCategories::class);
    }

    public function resultatsSousCategories()
    {
        return $this->hasManyThrough(ResultatsSousCategories::class, ResultatsCategories::class);
    }
}
