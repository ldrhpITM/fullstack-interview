<?php

use App\Models\Admin\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

    function quantity($product_id=null)
    {
        //obtener el stock disponible del producto
        $product=Product::find($product_id);
        $stock=$product->stock;
        return $stock;
    }
    function qty_added($product_id) //determinando cantidad de producto agregado al carrito
    {
        //recuperando los productos del carrito
        $cart=Cart::content();
        $item=$cart->where('id',$product_id)
                ->first();

        if ($item) {
           return $item->qty;
        }else{
            return 0;
        }
    }

    function qty_available($product_id) //obtener el stock aun disponible  para  agregar al carrito
    {
        return quantity($product_id) - qty_added($product_id);
    }

?>
