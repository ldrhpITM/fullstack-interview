<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function consultaProducto(Product $id) {
        $product=$id;
        return view('Admin.Product.index', compact('product'));
    }
}
