<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prodotti', function () {
    return view('prodotti');
});

Route::get('/contatti', function () {
    return view('contatti');
});
