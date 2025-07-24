<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    $products = ['Nvidia RTX 3090', 'Nvidia RTX 4090', 'Nvidia RTX 5090'];
    return view('products', ['products' => $products]);
});


Route::get('/products/{product}', function ($product) {
    return  view('product', ['product' => $product]);
});

Route::get('/contatti', function () {
    return view('contatti');
});
