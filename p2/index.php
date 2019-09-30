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
        <li>Player A picks <?php echo $player1Move; ?></li>
        <li>Player B picks to <?php echo $player2Move; ?></li>
        <li>The winner is <?php echo $winner; ?></li>
        <li>Player A picks <?php echo $player1Move; ?></li>
        <li>Player B picks to <?php echo $player2Move; ?></li>
        <li>The winner is <?php echo $winner; ?></li>
    </ul>
    <ul>
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <li>The winner is <?php echo $winner; ?></li>
    <?php } ?>
    </ul>
    <ul>
    <li>The final winner is <?php echo $finalwinner; ?></li>
    </ul>

</body>
</html>