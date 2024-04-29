<?php

namespace App\Http\Controllers;

use App\Models\Simulation;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Categorie;
use App\Models\SousCategorie;

class PDFController extends Controller
{
    public function generatePDF(Simulation $simulation)
    {
        // Create Dompdf instance
        $pdf = PDF::loadView('pdf.simulation', compact('simulation'));
        // dd($pdf, $inscription);
        return $pdf->download( $simulation->simulation_nom .'.pdf');
    }
}
