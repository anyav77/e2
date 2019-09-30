# Project 2
+ By: Anna Zinoveva
+ Production URL: <http://p2.atozez.com>

## Game planning
* Two players randomly choose rock, paper, scissors
    * define an array of options: rock, paper, scissors
    * define a variable $winner
    * define $player1moves: a random number between 3 intrigers
    * define $player2moves: a random number between 3 intrigers
    * create an empty array for $player1scores
* If they make the same choice, it's a tie
    * Define the condition for a tie: if statement where $player1moves equals $player2moves
* Rock beats scissors
    * create elseif statement where $player1moves is rock, and $player2moves is scissors
    * assign "Player A" string to $winner variable
    * push 1 into $player1scores
* Paper beats rock
    * Create elseif statement where player1moves is paper, and player2moves is rock
    * assign "Player A" string to $winner variable
    * push 1 into $player1scores
* Scissors beat paper
    * Create elseif statement where player1moves is scissors, and player2moves is paper
    * assign "Player A" string to $winner variable
    * push 1 into $player1scores
* Create else statement
* Assign "Player B" string to $winner variable
* Run the game 5 times
    * create a loop that runs 5 times
    * output the results to index.php
* The player with the most wins is the final winner
    * create if statement that calculates the results of $player1scores
    * if the number is greater or equal to 3
    * assign "Player A" string to $winner

## Outside resources

## Notes for instructor