<?php

namespace SisBezaFest;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //
    protected $fillable=["status"];

    public function products_size(){
        return $this->id;
    }
    public static function findOrCreateBySessionID($shopping_cart_id){
        if($shopping_cart_id)
            //buscar el carrito de compras con este id
            return ShoppingCart::findBySession($shopping_cart_id);
        else
            //crear un carrito de compras
            return ShoppingCart::createWithoutSession();

    }

    public static function findBySession($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession(){
        return ShoppingCart::create([
            "status"=>"incomplited"
        ]);
    }

}
