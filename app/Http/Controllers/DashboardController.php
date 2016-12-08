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
        $events = DB::table('events')
            ->select(
                'events.name'. session('locale') .' as productName',
                'events.description'. session('locale') .' as productDescription',
                'events.url as image',
                'events.date as date',
                'events.hour as hour'
            )
            ->get();
        return view('dashboard.event', compact('events'));
    }

    public function shop(){
        $products = DB::table('shops')
            ->join('products', 'shops.id', '=', 'products.shop_id')
            ->select(
                'products.id as productId',
                'shops.name as shopName',
                'products.name'. session('locale') .' as productName',
                'products.stock as productStock',
                'products.description'. session('locale') .' as productDescription'
            )
            ->get();


        $shops = DB::table('shops')->get();
        return view('dashboard.shop', compact('products', 'shops'));
    }

    public function getShops($query){
        return DB::table('shops')
            ->where('name', 'like', '%' . $query . '%')
            ->get();
    }
}
