<?php

namespace SisBezaFest\Http\Controllers;

use Illuminate\Http\Request;
use SisBezaFest\ShoppingCart;
use SisBezaFest\PayPal;
use SisBezaFest\InshoppingCart;
class ShoppingCartsController extends Controller
{
    //
    public function index(){
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart=ShoppingCart::findOrCreateBySessionID($shopping_cart_id);


        $paypal=new PayPal($shopping_cart->paquete()->get(),$shopping_cart->total());
        $paypal->generate();
        return '';
        //$paquete=$shopping_cart->paquete()->get();

       // $total=$shopping_cart->total();
       // return view("main.shoppincar",['paquete'=>$paquete,'total'=>$total]); 
    }
    public function strore(Request $request)
    {
        //
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart=ShoppingCart::findOrCreateBySessionID($shopping_cart_id);
        InShoppingCart::create([
         "shopping_cart_id"=>$shopping_cart->id,
         "paquete_id"=>$request->get('id')
         ]);
         return view("main.shoppincar");
    }
    
}
