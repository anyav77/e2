<?php require "index-controller.php"?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Rock Paper Scissors</title>
    <meta charset='utf-8'>
    <style>
        .winner {color: green;}
        .looser {color: red;}
        .tie {color: purple;}
    </style>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <h2>Instructions</h2>
    <ul>
        <li>Choose rock, paper, scissors from the list</li>
        <li>Click submit</li>
        <li>Your choice will be compared to the computer's choice:</li>
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

    <?php if($showResults) { ?>
    <ul>
        <li>You chose <?php echo $results['player1'] ?></li>
        <li>Computer chose <?php echo $results['player2'] ?></li>
        <?php if($results['winner']=='You won!'){ ?>
        <li class="winner"><?php echo $results['winner'] ?></li>
        <?php }else if($results['winner']=="It is a tie"){ ?>
        <li class="tie"><?php echo $results['winner'] ?></li>
        <?php }else{ ?>
        <li class="looser"><?php echo $results['winner'] ?></li>
        <?php } ?>
    </ul>
    <?php } ?>
    
</body>
</html>