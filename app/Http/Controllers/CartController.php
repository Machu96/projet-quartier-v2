<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addItem(Request $request){
        session(['item' => $request->get('id')]);
        return $request->get('id');
    }

    public function getItem(){
        return session('oui');
    }
}
