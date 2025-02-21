<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Instituto;

class InstitutoController extends Controller
{
    public function generarPdf(Instituto $instituto)
    {
        //return response()->json($instituto);
        $pdf = Pdf::loadView('pdf.instituto', compact('instituto'))->setPaper([0, 0, 612.8, 468.1]);
        return $pdf->stream('instituto.pdf');
    }
}
