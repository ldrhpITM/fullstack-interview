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
    function qty_added($product_id) //determinando cantidad de productos
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

    function qty_available($product_id) //stock aun disponible  para  agregar al carrito
    {
        return quantity($product_id) - qty_added($product_id);
    }

    /*function discount($item)
    {
        $product=Product::findOrFail($item->id);
        $qtyAvailable= qty_available($item->id);

        $product->quantity=$qtyAvailable;
        $product->save();

    }

    function increase($item)
    {
        $product=Product::findOrFail($item->id);
        $quantity= quantity($item->id, $item->options->color_id, $item->options->size_id)+$item->qty;

        if ($item->options->size_id) {

            $size=Size::findOrFail($item->options->size_id);
            $size->colors()->detach($item->options->color_id);

            $size->colors()->attach([
                $item->options->color_id=>['quantity'=>$quantity]
            ]);

        }else if ($item->options->color_id) {

            $product->colors()->detach($item->options->color_id);

            $product->colors()->attach([
                $item->options->color_id=>['quantity'=>$quantity]
            ]);
        }else{
            $product->quantity=$quantity;
            $product->save();
        }
    }*/
?>
