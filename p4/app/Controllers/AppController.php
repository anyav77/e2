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
        //$choice = $this->app->input('choice');

        # extract the data from the form
        $data = [
            'timestamp' => $this->app->input('timestamp', 'test'),
            'player1' => $this->app->input('choice', 'test'),
            'player2' => $this->app->input('choice', 'test'),
            'winner' => $this->app->input('choice', 'test'),
        ];
        # send the data to the database and redirect to the index page
        $this->app->db()->insert('attempts', $data);
        $this->app->redirect('/', ['player1'=>$data['player1']]);
    }
}
