<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        # This following line would only get executed *if* all of the above validation tests passed
        # Otherwise, the user is auto-redirected back to the form
        $confirmationName = $this->app->old('confirmationName', null);
        $name = $this->app->old('name', null);
        $player1 = $this->app->old('player1', null);
        $player2 = $this->app->old('player2', null);
        $winner = $this->app->old('winner', null);

        return $this->app->view('index', [
            'confirmationName'=>$confirmationName,
            'player1' => $player1,
            'player2' => $player2,
            'winner' => $winner,
        ]);
    }
    public function attempts()
    {
        $attempts = $this->app->db()->all('attempts');
        return $this->app->view('attempts', ['attempts'=>$attempts]);
    }

    public function attempt()
    {
        $attemptId = $this->app->param('id');
        $attempt = $this->app->db()->findById('attempts', $attemptId);
        if (is_null($attempt)) {
            return $this->app->redirect('/attempts', ['attemptNotFound' => true]);
        }
        return $this->app->view('attempt', ['attempt' => $attempt]);
    }
    public function process()
    {
        $this->app->validate([
            'choice' => 'required'
        ]);
        
        $moves = ["rock", "paper", "scissors"];
        $winner = null;
        $player1Move = $this->app->input('choice', 'player did not make a choice');
        $player2Move = $moves[rand(0, 2)];

        # Compare the results; determine the winner
        if ($player1Move == $player2Move) {
            $winner = "Tie";
        } elseif (($player1Move == "rock" and $player2Move == "scissors") || ($player1Move == "paper" and $player2Move == "rock") || ($player1Move == "scissors" and $player2Move == "paper")) {
            $winner = 'Player';
        } else {
            $winner = 'Computer';
        }

        # extract the data from the form, make selection for player 2
        $data = [
            'name' => $this->app->input('name', 'Anonymous Player'),
            'timestamp' => date('Y-m-d H:i:s'),
            'player1' => $player1Move,
            'player2' => $player2Move,
            'winner' => $winner,
        ];

        # send the data to the database and redirect to the index page
        $this->app->db()->insert('attempts', $data);
        $this->app->redirect(
            '/',
            [
            'confirmationName'=>$data['name'],
            'name'=>$data['name'],
            'player1'=>$data['player1'],
            'player2'=>$data['player2'],
            'winner'=>$data['winner'],
        ]
        );
    }
}
