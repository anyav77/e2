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
        $attempts = $this->app->db()->all('attempts');
        return $this->app->view('attempts', ['attempts'=>$attempts]);
    }

    public function attempt()
    {
        return $this->app->view('attempt');
    }
}
