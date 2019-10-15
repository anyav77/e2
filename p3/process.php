<?php
session_start();


$moves = ["rock", "paper", "scissors"];
$winner = null;
$player1Move = $_GET['choice'];
$player2Move = $moves[rand(0, 2)];

# Compare user's selection to the computer's selection; Determine the winner

if ($player1Move == $player2Move) {
    $winner = "It is a tie";

} elseif (($player1Move == "rock" and $player2Move == "scissors") || ($player1Move == "paper" and $player2Move == "rock") || ($player1Move == "scissors" and $player2Move == "paper")) {
    $winner = 'You won!';
} else {
    $winner = 'You lost...';
}

# Collect the results

$results = [
    'winner' => $winner,
    'player1' => $player1Move,
    'player2' => $player2Move,
];

# Output the results to the session; redirect back to index.php
$_SESSION['results'] = $results;
header('Location: index.php');
