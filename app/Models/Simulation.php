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

    public int $level = 10;

    public function rules(): array
    {
        return [
            'level' => ['required', 'gt:10'],
        ];
    }
}
