<?php
session_start();

$moves = ["rock", "paper", "scissors"];
$winner = null;
$player1Move = $_GET['choice'];
$player2Move = $moves[rand(0, 2)];

if ($player1Move == $player2Move) {
    $winner = "It is a tie";

} elseif (($player1Move == "rock" and $player2Move == "scissors") || ($player1Move == "paper" and $player2Move == "rock") || ($player1Move == "scissors" and $player2Move == "paper")) {
    $winner = 'You won!';
} else {
    $winner = 'You lost...';
}


$results = [
    'winner' => $winner,
    'player1' => $player1Move,
    'player2' => $player2Move,
];

$_SESSION['results'] = $results;
header('Location: index.php');
