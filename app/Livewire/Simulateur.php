<?php

namespace App\Livewire;

use Livewire\Component;

class Simulateur extends Component
{
    public array $simulateurChart;

    public function mount(){
       $this->simulateurChart = [
            'type' => 'pie',
            'data' => [
                'labels' => $this->getCategories(),
                'datasets' => [
                    [
                        'label' => '# of Votes',
                        'data' => [12, 19, 3],
                    ]
                ]
            ]
        ];
    }

    public function getCategories(){
        return ['Mary', 'Joe', 'Ana'];
    }
    public function render()
    {
        return view('livewire.simulateur');
    }
}