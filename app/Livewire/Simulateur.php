<?php

namespace App\Livewire;

use Livewire\Component;

class Simulateur extends Component
{
    public int $level = 10;

    public function render()
    {
        return view('livewire.simulateur');
    }
}
