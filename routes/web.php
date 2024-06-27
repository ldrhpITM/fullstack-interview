<?php

use App\Http\Controllers\Admin\Product\ProductController;
use App\Livewire\Admin\ShoppingCart\ShoppingCartComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('producto/{id}',[ProductController::class,'consultaProducto'])->name('consulta.producto');
route::get('carrito-de-compras', ShoppingCartComponent::class)->name('carrito.compras.index');
