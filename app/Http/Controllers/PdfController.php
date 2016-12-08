<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function generate(Request $request,PDF $pdf){

        $data = json_decode($request->data);
        $items = DB::table('products')
            ->select(
                'products.name' . session('locale') . ' as productName',
                'products.price as productPrice'
            )
            ->get();
        $pdf = $pdf->loadView('bill.index', compact('data'));
        return $pdf->download('invoice.pdf');
    }
}
