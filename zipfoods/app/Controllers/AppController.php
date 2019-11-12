<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $welcomes = ['Welcome', 'Aloha!', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }

    public function contact()
    {
        return $this->app->view('contact');
    }

    public function about()
    {
        return $this->app->view('about');
    }

    public function show()
    {
        return 'Show details for an individual product...';
    }
}
