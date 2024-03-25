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
        $pdf = PDF::loadView('pdf.inscription', compact('inscription', 'qr_code'));
        // dd($pdf, $inscription);
        return $pdf->download( $simulation->simulations_nom .'.pdf');
    }
}
