<?php

namespace App\Livewire\Admin\ShoppingCart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ShoppingCartComponent extends Component
{
    //escuchando evento dessde update-cart-item component para volver a renderizar el componente
    protected $listeners=['renderCart'=>'render'];

    public function destroy()
    {
        //vaciando el contenido del carrito de compras
        Cart::destroy();
        //renderizando contador de carrito de compra
        $this->dispatch('renderCart');
    }
    public function delete($rowId)
    {
        //removiendo un item del carrito de compras
        Cart::remove($rowId);
         //renderizando contador de carrito de compra
        $this->dispatch('renderCart');
    }
    public function render()
    {
        return view('livewire.admin.shopping-cart.shopping-cart-component');
    }
}
