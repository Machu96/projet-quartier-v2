<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function analytics(){
        $total = DB::table('products')
            ->count();

        return view('dashboard.analytics', compact('total'));
    }

    public function event(){
        return view('dashboard.event');
    }

    public function shop(){
        $products = DB::table('shops')
            ->join('products', 'shops.id', '=', 'products.shop_id')
            ->select(
                'products.id as productId',
                'shops.name as shopName',
                'products.name as productName',
                'products.stock as productStock',
                'products.description as productDescription'
            )
            ->get();
        return view('dashboard.shop', compact('products'));
    }
}
