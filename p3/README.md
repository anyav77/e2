# Project 3
+ By: Anna Zinoveva
+ Production URL: <http://p3.atozez.com>

## Game planning
* Select rock, paper, scissors from the list
    * create form elements
    * add radio inputs and labels for rock, paper, scissors
* Click submit
    * add the submit button
    * add action and method to the form element
* Your selection will be compared to the computer's selection:
    * define an array of options: rock, paper, scissors
    * define $winner variable and set it to null
    * define $player1moves: an input value from the form
    * define $player2moves: a random number between 3 integers
 * Determine the winner   
    * If the choices match, it's a tie
        * define the condition for a tie: if statement where $player1moves equals $player2moves
        * assign "It is a tie" string to $winner variable
    * Rock beats scissors
        * create else if statement where $player1moves is rock, and $player2moves is scissors
        * assign "You won!" string to $winner variable
    * Paper beats rock
        * create else if statement where player1moves is paper, and player2moves is rock
        * assign "You won!" string to $winner variable
    * Scissors beat paper
        * create else if statement where player1moves is scissors, and player2moves is paper
        * assign "You won!" string to $winner variable
    * Create else statement for the computer's scores
        * assign "You lost..." string to $winner variable
* Collect results
    * start the session in process.php
    * create an associative array $results 
    * collect the values for $winner, $player1moves, $player2moves
    * output $resluts to the session
* Display results to the player
    * redirect back to the index.php
    * create a conditional statement on index.php that displays the results if they are available
    * start the session in index-controller.php
    * check if $results exist in the session
    * pass the information to index.php using boolean $showResults
    * NULL the $results in the session after displaying them


## Outside resources

## Notes for instructor