<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected static $projects = [
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

    public function homepage()
    {
        return view('welcome');
    }

    public function products()
    {
        $products = ['Nvidia RTX 3090', 'Nvidia RTX 4090', 'Nvidia RTX 5090'];
        return view('products', ['products' => $products, 'projects' => self::$projects]);
    }

    public function product($product)
    {
        return  view('product', ['product' => $product]);
    }

    public function contacts()
    {
        return view('contatti');
    }

    public function project($project)
    {

        foreach (self::$projects as $slug) {

            if ($slug['slug'] === $project) {
                return view('project', ['project' => $slug]);
            }
        }
        abort(404);
    }
}
