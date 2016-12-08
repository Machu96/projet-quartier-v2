<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $cart = session('item') !== null ? session('item') : [];

        $data = DB::table('shops')
            ->join('products', 'shops.id', '=', 'products.shop_id')
            ->select(
                'products.id as productId',
                'shops.name as shopName',
                'products.name'.session('locale').' as productName',
                'products.stock as productStock',
                'products.description'.session('locale').' as productDescription'
            )
            ->whereIn('products.id', $cart)
            ->get();

        return view('cart.index', compact('data'));
    }

    public function addItem(Request $request){
        $id = $request['id'];
        $session = is_numeric(session('item')) || session('item') === null ? session(['item' => []]) : session('item');

        array_push($session, $request['id']);
        session(['item' => $session]);
    }

    public function getItem(){
        $session = is_numeric(session('item')) || session('item') === null ? session(['item' => []]) : session('item');

        return DB::table('shops')
            ->join('products', 'shops.id', '=', 'products.shop_id')
            ->select(
                'products.id as productId',
                'shops.name as shopName',
                'products.name'.session('locale').' as productName',
                'products.stock as productStock',
                'products.description'.session('locale').' as productDescription'
            )
            ->whereIn('products.id', $session)
            ->get();
    }
}