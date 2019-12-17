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
        $moves = ["rock", "paper", "scissors"];
        $winner = null;
        $player1Move = $this->app->input('choice', 'test');
        $player2Move = $moves[rand(0, 2)];


        # Compare the results; determine the winner

        if ($player1Move == $player2Move) {
            $winner = "It is a tie";
        } elseif (($player1Move == "rock" and $player2Move == "scissors") || ($player1Move == "paper" and $player2Move == "rock") || ($player1Move == "scissors" and $player2Move == "paper")) {
            $winner = 'You won!';
        } else {
            $winner = 'Computer won...';
        }

        # extract the data from the form, make selection for player 2
        $data = [
            'timestamp' => $this->app->input('timestamp', 'test'),
            'player1' => $player1Move,
            'player2' => $player2Move,
            'winner' => $winner,
        ];
        # send the data to the database and redirect to the index page
        $this->app->db()->insert('attempts', $data);
        $this->app->redirect(
            '/',
            [
            'player1'=>$data['player1'],
            'player2'=>$data['player2'],
            'winner'=>$data['winner']
        ]
        );
    }
}
