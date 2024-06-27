<?php

namespace App\Livewire\Admin\Cart;

use Livewire\Component;

class CartComponent extends Component
{
    //escuchando evento dessde add-cart-item para volver a renderizar el componente
    protected $listeners=['renderCart'=>'render'];
    public function render()
    {
        return view('livewire.admin.cart.cart-component');
    }
}
