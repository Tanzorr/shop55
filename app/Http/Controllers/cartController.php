<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Gloudemans\Shoppingcart\Facades\Cart;

class cartController extends Controller
{
    //
    public function index(){

       // return Cart::content();
        return view('cart.index', ['data' =>$cart]);
    }

    public function addItem($id){
            $pro = products::find($id);
            $cart = Cart::add(['id'=>$pro->id, 'name'=>$pro->pro_name, 'qty'=>1,'prive'=>$pro->pro_price,]);
            return view('cart.index', ['data' =>$cart]);
    }
}
