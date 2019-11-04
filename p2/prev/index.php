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
        <?php foreach ($winner as $key => $winner) { ?>
        <li>Player A chooses </li>
        <li>Player B chooses </li>
        <li type=none>Round <?php echo $key + 1; ?> winner is <?php echo $winner; ?><br><br></li>
        <?php } ?>
    </ul>
    <h3>and the final winner is... <?php echo $finalwinner; ?>
    </h3>
</body>

</html>