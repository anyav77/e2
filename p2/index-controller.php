<?php

$moves = ["rock", "paper", "scissors"];
$winner = null;
$finalwinner = null;
$player1scores = [];




for($i = 0; $i < 5; $i++) {
    $player1Move = $moves[rand(0, 2)];
    $player2Move = $moves[rand(0, 2)];
    var_dump($player1Move);
    var_dump($player2Move);

    if($player1Move == $player2Move){
        var_dump('Tie');
        $winner = "Tie";
    }elseif(($player1Move == "rock" and $player2Move == "scissors") || ($player1Move == "paper" and $player2Move == "rock") || ($player1Move == "scissors" and $player2Move == "paper")) {
        var_dump('Player A wins');
        $winner = "Player A";
        $player1scores[] = 1;
        var_dump($player1scores);
    } else{
        var_dump('Player B wins');
        $winner = "Player B";
    }
}
var_dump(count($player1scores));

# Calculate the final winner, based on Player A scores

if (count($player1scores) >= 3){
    $finalwinner = "Player A";
}else{
    $finalwinner = "Player B";
}
var_dump($finalwinner);
