<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        return $this->app->view('index');
    }
    public function attempts()
    {
        return $this->app->view('attempts');
    }

    public function attempt()
    {
        return $this->app->view('attempt');
    }
}
