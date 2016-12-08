<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function generate(Request $request,PDF $pdf){

        dd();
        $items = DB::table('products')
            ->select(
                'products.name' . session('locale') . ' as productName',
                'products.price as productPrice'
            )
            ->get();
        $pdf = $pdf->loadView('bill.index', compact('items'));
        return $pdf->download('invoice.pdf');
    }
}
