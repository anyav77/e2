<?php

$moves = ["rock", "paper", "scissors"];
$winner = [];
$finalwinner = null;
$player1scores = [];
$player2scores = [];
$result = [];




for($i = 0; $i < 5; $i++) {
    $player1Move = $moves[rand(0, 2)];
    $player2Move = $moves[rand(0, 2)];
    var_dump($player1Move);
    var_dump($player2Move);

    if($player1Move == $player2Move){
        var_dump('Tie');
        $winner[] = "a tie";
        $player1scores[] = 0.5;
        $player2scores[] = 0.5;
    }elseif(($player1Move == "rock" and $player2Move == "scissors") || ($player1Move == "paper" and $player2Move == "rock") || ($player1Move == "scissors" and $player2Move == "paper")) {
        var_dump('Player A wins');
        $winner[] = "Player A";
        $player1scores[] = 1;
        var_dump($player1scores);
    } else{
        var_dump('Player B wins');
        $winner[] = "Player B";
        $player2scores[] = 1;
    }
}
var_dump(count($player1scores));

# Calculate the final winner, based on Player A scores

if (count($player1scores) > count($player2scores)){
    $finalwinner = "Player A";
}elseif(count($player1scores) == count($player2scores)){
    $finalwinner = "It's a tie";
}else{
    $finalwinner = "Player B";
}
var_dump($winner);
var_dump($finalwinner);
