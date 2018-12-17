<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\products;

class cartController extends Controller
{
    //
    public function index(){
        $cart = Cart::content();
        return view('cart.index', [
            'data' => $cart,

        ]);
    }
}
