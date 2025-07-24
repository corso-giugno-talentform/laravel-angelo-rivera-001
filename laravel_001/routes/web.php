<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/products', function () {
    $products = ['Nvidia RTX 3090', 'Nvidia RTX 4090', 'Nvidia RTX 5090'];
    $projects = [
        [
            'id' => 1,
            'slug' => 'piattaforma-di-ecommerce',
            'nome' => 'Piattaforma di eCommerce',
            'descrizione' => 'Una piattaforma per vendere prodotti online con pagamento integrato.',
            'image' => 'https://picsum.photos/id/3/200/300'
        ],
        [
            'id' => 2,
            'slug' => 'applicazione-per-task',
            'nome' => 'Applicazione per Task',
            'descrizione' => 'Un’app per organizzare e monitorare le attività giornaliere.',
            'image' => 'https://picsum.photos/id/3/200/300'

        ],
        [
            'id' => 3,
            'slug' => 'software-gestionali',
            'nome' => 'Software Gestionali',
            'descrizione' => 'Strumenti per automatizzare la contabilità e la gestione aziendale.',
            'image' => 'https://picsum.photos/id/6/200/300'

        ],
    ];
    return view('products', ['products' => $products, 'projects' => $projects]);
})->name('products');


Route::get('/products/{product}', function ($product) {
    return  view('product', ['product' => $product]);
})->name('product');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contacts');

Route::get('/{project}', function ($project) {
    //project = ago
    //projects = paglia
    //abort(404);
    $projects = [
        [
            'id' => 1,
            'slug' => 'piattaforma-di-ecommerce',
            'nome' => 'Piattaforma di eCommerce',
            'descrizione' => 'Una piattaforma per vendere prodotti online con pagamento integrato.',
            'image' => 'https://picsum.photos/id/3/200/300'
        ],
        [
            'id' => 2,
            'slug' => 'applicazione-per-task',
            'nome' => 'Applicazione per Task',
            'descrizione' => 'Un’app per organizzare e monitorare le attività giornaliere.',
            'image' => 'https://picsum.photos/id/3/200/300'

        ],
        [
            'id' => 3,
            'slug' => 'software-gestionali',
            'nome' => 'Software Gestionali',
            'descrizione' => 'Strumenti per automatizzare la contabilità e la gestione aziendale.',
            'image' => 'https://picsum.photos/id/6/200/300'

        ],
    ];

    foreach ($projects as $slug) {

        if ($slug['slug'] === $project) {
            return view('project', ['project' => $slug]);
        }
    }
    abort(404);
})->name('project');
