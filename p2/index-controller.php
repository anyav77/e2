<?php
$moves = ["rock", "paper", "scissors"];
$finalwinner = null;
$player1scores = [];
$player2scores = [];
$result = [
    'player1' => [],
    'player2' => [],
    'winner' => [],
];

# Play the game 5 times
# Determine the winner for each round and collect the scores
for($i = 0; $i < 5; $i++) {


    $player1Move = $moves[rand(0, 2)];
    $player2Move = $moves[rand(0, 2)];
    $result['player1'] = $player1Move;
    $result['player2'] = $player2Move;

    if($player1Move == $player2Move){
        $result['winner'] = "a tie";
    }elseif(($player1Move == "rock" and $player2Move == "scissors") || ($player1Move == "paper" and $player2Move == "rock") || ($player1Move == "scissors" and $player2Move == "paper")) {
        $result['winner'] = "Player A";
        $player1scores[] = 1;
    } else{
        $result['winner'] = "Player B";
        $player2scores[] = 1;
    }
}


# Calculate the final winner, based on Player A scores

if (count($player1scores) > count($player2scores)){
    $finalwinner = "Player A";
}elseif(count($player1scores) == count($player2scores)){
    $finalwinner = "It's a tie";
}else{
    $finalwinner = "Player B";
}
