<?php

namespace App\Livewire\Admin\Cart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class AddCartItemComponent extends Component
{
    public $product;
    public $quantity;
    public $qty=1;
    public $options=[];

    public function mount()
    {
        //se almacenara el stock dipoble despues de agregar un producto al carrito
        $this->quantity=qty_available($this->product->id);
        $this->options['image']= $this->product->images->first()->url;
    }

    public function decrement()
    {
        $this->qty= $this->qty-1;
    }
    public function increment()
    {
        $this->qty= $this->qty+1;
    }
    public function addItem()
    {


        Cart::add(['id' => $this->product->id,
                    'name' => $this->product->name,
                    'qty' =>  $this->qty,
                    'price' =>  $this->product->price,
                    'weight' => 0,
                    'options' => $this->options
                    ]);
        //disminuye  el contador de stock
        $this->quantity=qty_available($this->product->id);
        //resetea la variable de cantidad
        $this->reset('qty');
        $this->dispatch('renderCart');
        //$this->dispatchTo('cart.cart-movil','render');
    }

    public function render()
    {
        return view('livewire.admin.cart.add-cart-item-component');
    }
}
