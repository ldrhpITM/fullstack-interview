<?php

namespace App\Livewire\Admin\Product;

use App\Models\Admin\Product;
use Livewire\Component;

class ProductComponent extends Component
{
    public $products=[];
    public function mount()  {
        $this->getProducts();
    }
    function getProducts(){
        $this->products=Product::all();
    }
    public function render()
    {
        return view('livewire.admin.product.product-component');
    }
}
