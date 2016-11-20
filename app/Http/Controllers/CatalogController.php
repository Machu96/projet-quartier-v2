<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function index(){
        $data = DB::table('shops')
            ->join('products', 'shops.id', '=', 'products.shop_id')
            ->select(
                'shops.name as shopName',
                'products.name as productName',
                'products.stock as productStock',
                'products.description as productDescription'
            )
            ->get();

        return view('catalog.index', compact('data'));
    }

    public function filter($query){
        $data = DB::table('shops')
            ->join('products', 'shops.id', '=', 'products.shop_id')
            ->select(
                'shops.name as shopName',
                'products.name as productName',
                'products.stock as productStock',
                'products.description as productDescription'
            )
            ->where('products.name', 'like', $query . '%')
            ->get();
        return $data;
    }
}
