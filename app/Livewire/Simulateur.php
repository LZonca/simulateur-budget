<?php

namespace App\Livewire;

use Livewire\Component;

class Simulateur extends Component
{
    public int $level = 20;
    public int $level1 = 60;
    public int $level2 = 40;
    public int $level3 = 120;

    public function render()
    {
        return view('livewire.simulateur');
    }

    // Méthodes pour ajuster les valeurs avec +/- 10%
    public function adjustLevel($amount)
    {
        $this->level += $this->level * $amount / 100;
    }

    public function adjustLevel1($amount)
    {
        $this->level1 += $this->level1 * $amount / 100;
    }

    public function adjustLevel2($amount)
    {
        $this->level2 += $this->level2 * $amount / 100;
    }
}
