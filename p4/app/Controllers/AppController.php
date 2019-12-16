<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $player1 = $this->app->old('player1', null);
        return $this->app->view('index', ['player1' => $player1]);
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
    public function process()
    {
        //$choice = $this->app->input('choice', 'test');
        //$choice = $this->app->inputAll();
        //dump($choice);

        $data = [
            'player1' => $this->app->input('choice', 'test')
        ];
        //dump($data);
        $this->app->db()->insert('attempts', $data);
        //return "Process the form and persist the selection tothe database";
        //$this->app->redirect('/', [$data]);
        $this->app->redirect('/', ['player1'=>$data['player1']]);
    }
}
