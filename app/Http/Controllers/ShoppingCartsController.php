<?php

namespace SisBezaFest\Http\Controllers;

use Illuminate\Http\Request;
use SisBezaFest\ShoppingCart;
class ShoppingCartsController extends Controller
{
    //
    public function index(){
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart=ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        $paquete=$shopping_cart->paquete()->get();

        $total=$shopping_cart->total();
        return view("main.shoppincar",['paquete'=>$paquete,'total'=>$total]);
    }
    
}
