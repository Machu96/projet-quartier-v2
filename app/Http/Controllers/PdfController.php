<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function generate(Request $request,PDF $pdf){

        $data = json_decode($request->data);
        $total = 0;

        foreach ($data as $d){
            $total += $d->total;
        }


        $pdf = $pdf->loadView('bill.index', compact('data', 'total'));
        return $pdf->download('invoice.pdf');

    }
}
