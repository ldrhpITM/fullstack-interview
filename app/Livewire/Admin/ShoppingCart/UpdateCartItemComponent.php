<?php

namespace App\Livewire\Admin\ShoppingCart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class UpdateCartItemComponent extends Component
{
    public $rowId;
    public $qty;
    public $quantity;
    public function mount()
    {
        //obteniendo el producto del  carrito de compra
        $item=Cart::get($this->rowId);
        $this->qty=$item->qty;
        $this->quantity=qty_available($item->id);
    }

    public function decrement()
    {
        $this->qty= $this->qty-1;
        Cart::update($this->rowId, $this->qty);
        $this->dispatch('renderCart');
    }
    public function increment()
    {
        $this->qty= $this->qty+1;
        Cart::update($this->rowId, $this->qty);
        $this->dispatch('renderCart');
    }

    public function render()
    {
        return view('livewire.admin.shopping-cart.update-cart-item-component');
    }
}
