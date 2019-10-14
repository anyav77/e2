<?php
session_start();

$moves = ["rock", "paper", "scissors"];
$winner = null;
$player1Move = $_GET['choice'];
$player2Move = $moves[rand(0, 2)];
// $results['player1'] = $player1Move;
// $results['player2'] = $player2Move;

if ($player1Move == $player2Move) {
    //$results['winner'] = 'a tie';
    $winner = 'a tie';

} elseif (($player1Move == "rock" and $player2Move == "scissors") || ($player1Move == "paper" and $player2Move == "rock") || ($player1Move == "scissors" and $player2Move == "paper")) {
    //$results['winner'] = 'Player 1';
    $winner = 'Player 1';
} else {
    $winner = 'Player 2';
}

// var_dump($player1Move);
// var_dump($player2Move);
// var_dump($winner);

$results = [
    'winner' => $winner,
    'player1' => $player1Move,
    'player2' => $player2Move,
];

$_SESSION['results'] = $results;
header('Location: index.php');
