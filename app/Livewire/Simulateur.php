<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Categorie;
use App\Models\sousCategorie;
use App\Models\sousSousCategorie;

class Simulateur extends Component
{
    // public int $level = 20;
    // public int $level1 = 60;
    // public int $level2 = 40;
    // public int $level3 = 120;

    public $categories;
    public $sousCategories;
    public $sousSousCategories;


    public function render()
    {
        return view('livewire.simulateur');
    }

    public function mount()
    {
        $this -> categories = Categorie::all();
        $this -> sousCategories = sousCategorie::all();
        $this -> sousSousCategories = sousSousCategorie::all();
    }

    // Méthodes pour ajuster les valeurs avec +/- 10%
    // public function adjustLevel($amount)
    // {
    //     $this->level += $this->level * $amount / 100;
    //     $this->updateTotal();
    // }

    // public function adjustLevel1($amount)
    // {
    //     $this->level1 += $this->level1 * $amount / 100;
    //     $this->updateTotal();
    // }

    // public function adjustLevel2($amount)
    // {
    //     $this->level2 += $this->level2 * $amount / 100;
    //     $this->updateTotal();
    // }

    // Méthode pour mettre à jour la somme totale
    private function updateTotal()
    {
        $this->level3 = $this->level + $this->level1 + $this->level2;
    }
}
