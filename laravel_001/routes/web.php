<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/products/{product}', [PageController::class, 'product'])->name('product');
Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');
Route::get('/{project}', [PageController::class, 'project'])->name('project');
