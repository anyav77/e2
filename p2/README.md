# Project 2
+ By: Anna Zinoveva
+ Production URL: <http://p2.atozez.com>

## Game planning
* Two players randomly choose rock, paper, scissors
    * define an array of options: rock, paper, scissors
    * define $player1moves: a random number between 3 intrigers
    * define $player2moves: a random number between 3 intrigers
    * create empty arrays for $player1scores and $player2scores
* Determine the winner for each round and collect the scores
    * If they make the same choice, it's a tie
        * define the condition for a tie: if statement where $player1moves equals $player2moves
    * Rock beats scissors
        * create elseif statement where $player1moves is rock, and $player2moves is scissors
        * assign "Player A" string to $winner variable
        * push 1 into $player1scores
    * Paper beats rock
        * create elseif statement where player1moves is paper, and player2moves is rock
        * assign "Player A" string to $winner variable
        * push 1 into $player1scores
    * Scissors beat paper
        * create elseif statement where player1moves is scissors, and player2moves is paper
        * assign "Player A" string to $winner variable
        * push 1 into $player1scores
    * Create else statement for Player B scores
        * assign "Player B" string to $winner variable
        * push 1 into $player2scores
* Play the game 5 times
    * create a loop that runs 5 times
    * output the results to index.php
* The player with the most wins is the final winner
    * create if statement that calculates the results of $player1scores
    * if the number is greater or equal to 3
    * assign "Player A" string to $winner

## Outside resources

## Notes for instructor

I tried nested loops to creAte multiple rounds, but I ran into the warnings and errors.

I also tried this approach:

```html
    <h2>Results</h2>
    <ul>
    <?php foreach($winner as $key => $winner) { ?>
        <li>Player A chooses </li>
        <li>Player B chooses </li>
        <li type = none>Round <?php echo $key + 1; ?> winner is <?php echo $winner; ?><br><br></li>
    <?php } ?>
    </ul>
```
It would output the winner for each round, but I couldn't get the winner results this way

You can see the previous version in the prev folder