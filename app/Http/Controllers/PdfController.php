<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generate(PDF $pdf){

        $pdf = $pdf->loadView('bill.index');
        return $pdf->download('invoice.pdf');
    }
}
