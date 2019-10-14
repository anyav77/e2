<?php require "index-controller.php"?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Rock Paper Scissors</title>
    <meta charset='utf-8'>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <h2>Instructions</h2>
    <ul>
        <li>Select rock, paper, scissors form the list</li>
        <li>Click submit</li>
        <li>Your selection will be compared to the computer's selection (Player 2):</li>
        <li>If the choices match, it's a tie</li>
        <li>Rock beats scissors</li>
        <li>Paper beats rock</li>
        <li>Scissors beat paper</li>
    </ul>
    <form method="GET" action="process.php">
        <input type="radio" value="rock" id="rock" name="choice">
        <label for="rock">Rock</label>
        <input type="radio" value="paper" id="paper" name="choice">
        <label for="paper">Paper</label>
        <input type="radio" value="scissors" id="scissors" name="choice">
        <label for="Scissors">Scissors</label>
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php if('showResults'){ ?>
        Show results...
    <?php } ?>
    
</body>
</html>