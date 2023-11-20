<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    use HasFactory;

    public function permission(){
        return $this->hasOne(User::class, 'utilisateur_id');
    }
}
