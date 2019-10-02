<?php require "index-controller.php"?>
<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Rock Paper Scissors</title>
    <meta charset='utf-8'>

</head>

<body>
    <h1>Rock Paper Scissors</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Two players randomly choose rock, paper, scissors</li>
        <li>If they make the same choice, it's a tie</li>
        <li>Rock beats scissors</li>
        <li>Paper beats rock</li>
        <li>Scissors beat paper</li>
        <li>The game is played 5 times</li>
        <li>The player with the most wins is the final winner</li>
    </ul>
    

    <h2>Results</h2>
    <ul>
    
    <?php 
    foreach($result as $key => $val){ ?>
        <li><?php echo $key . " : " . $val; ?></li>
    <?php } ?>
 
    </ul>
    
    <h3>and the final winner is... <?php echo $finalwinner; ?></h3>
    <p>Player 1 Scores are: <?php echo count($player1scores) ?></p>
    <p>Player 2 Scores are: <?php echo count($player2scores) ?></p>

</body>
</html>