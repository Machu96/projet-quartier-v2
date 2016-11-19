<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function index(){
        $data = DB::table('shops')->join('products', 'shops.id', '=', 'products.shop_id')->get();

        return view('catalog.index', compact('data'));
    }
}
