<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    use HasFactory;

    // public function simulations(){
    //     return $this->belongsTo(SousCategorie::class);
    // }

    public function owner(){
        return $this->belongsTo(User::class, 'utilisateur_id');

    }
}
