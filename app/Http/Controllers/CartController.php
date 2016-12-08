<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $cart = session('item') !== null ? session('item') : [];

        $ids = [];
        foreach (session('item') as $s){
            array_push($ids, $s['id']);
        }

        $data = DB::table('shops')
            ->join('products', 'shops.id', '=', 'products.shop_id')
            ->select(
                'products.id as productId',
                'shops.name as shopName',
                'products.name'.session('locale').' as productName',
                'products.stock as productStock',
                'products.description'.session('locale').' as productDescription',
                'products.price as productPrice'
            )
            ->whereIn('products.id', $ids)
            ->get();

        foreach ($data as $d){
            foreach ($cart as $c){
                if($c['id'] == $d->productId){
                    $d->quantity = $c['quantity'];
                    $d->total = $c['quantity'] * $d->productPrice;
                }
            }
        }

        return view('cart.index', compact('data'));
    }

    public function addItem(Request $request){
        $item = [
            'id' => $request['id'],
            'quantity' => $request['quantity']
        ];

        $session = is_numeric(session('item')) || session('item') === null ? session(['item' => []]) : session('item');

        if($this->keyExist($request['id']) !== false){
            $session[$this->keyExist($request['id'])] = $item;
        }else{
            array_push($session, $item);
        }


        session(['item' => $session]);
        session('mach', session('item'));
        return session('item');
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

    public function keyExist($id){
        for ($i = 0; $i < sizeof(session('item')); $i++){

            if ($id == session('item')[$i]['id']){
                return $i;
            }
        }
        return false;
    }
}