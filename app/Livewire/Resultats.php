<?php

namespace App\Livewire;

use App\Http\Controllers\PDFController;
use App\Models\Simulation;
use Livewire\Component;

class Resultats extends Component
{
    public $simulations;

    public function mount($simulations)
    {
        $this->simulations = $simulations;
    }

    public function generateResult($simulationId)
    {
        $simulation = Simulation::find($simulationId);
        $pdfController = new \App\Http\Controllers\PDFController;
        $pdfController->generatePDF($simulation);
    }
    public function render()
    {
        return view('livewire.resultats');
    }
}
