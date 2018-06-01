<?php

namespace SisBezaFest\Http\Controllers;

use Illuminate\Http\Request;
use SisBezaFest\ShoppingCart;
use SisBezaFest\InshoppingCart;
class InShoppingCartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function strore($idprod)
    {
        //
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart=ShoppingCart::findOrCreateBySessionID($shopping_cart_id);
        InShoppingCart::create([
         "shopping_cart_id"=>$shopping_cart->id,
         "paquete_id"=>$idprod
         ]);
         $paquete=$shopping_cart->paquete()->get();

         $total=$shopping_cart->total();
         return view("main.shoppincar",['paquete'=>$paquete,'total'=>$total]); 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
