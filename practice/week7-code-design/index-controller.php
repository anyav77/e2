<?php

$winner = [];
$player1scores = 0;
$player2scores = 0;
$result = [];


for ($i = 0; $i < 5; $i++) {
    $player1Move = makeMove();
    $player2Move = makeMove();
    $results[$i]['player1'] = $player1Move;
    $results[$i]['player2'] = $player2Move;
 
    if ($player1Move == $player2Move) {
        $results[$i]['winner'] = 'a tie';
        $player1scores += 0.5;
        $player2scores += 0.5;
    } elseif (($player1Move == "rock" and $player2Move == "scissors") || ($player1Move == "paper" and $player2Move == "rock") || ($player1Move == "scissors" and $player2Move == "paper")) {
        $results[$i]['winner'] = 'Player 1';
        $player1scores += 1;
    } else {
        $results[$i]['winner'] = 'Player 2';
        $player2scores += 1;
    }
}
# Calculate the final winner, based on Player A scores

function finalScore($player1scores, $player2scores)
{
    $winningScore = 0;
    $finalwinner = null;
    if ($player1scores > $player2scores) {
        $finalwinner = "Player A";
        $winningScore = $player1scores;
        //var_dump($winningScore);
        return array($winningScore, $finalwinner);
    } elseif ($player1scores == $player2scores) {
        $finalwinner = "It's a tie";
        $winningScore = $player1scores;
        //var_dump($winningScore);
        return array($winningScore, $finalwinner);
    } else {
        $finalwinner = "Player B";
        $winningScore = $player2scores;
        //var_dump($winningScore);
        return array($winningScore, $finalwinner);
    }
}
//var_dump($winningScore); // returns NULL
finalScore($player1scores, $player2scores);
$winningScore = finalScore($player1scores, $player2scores);
$finalwinner = finalScore($player1scores, $player2scores);


function makeMove()
{
    $moves = ["rock", "paper", "scissors"];
    return $moves[rand(0, 2)];
}
