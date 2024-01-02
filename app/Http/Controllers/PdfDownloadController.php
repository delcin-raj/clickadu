<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfDownloadController extends Controller
{
    public function downloadPdf()
    {
        // $data = ['dynamicData' => $this->fetchData()]; // Fetch your dynamic data
    $pdf = PDF::loadView('invoice_pdf'/*, $data*/); // Load your view file with data

        return $pdf->download('filename.pdf'); // Download the generated PDF
    }
}
