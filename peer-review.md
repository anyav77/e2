## P3 Peer Review

+ Reviewer's name: Anna Zinoveva
+ Reviwee's name: Sarah
+ URL to reviewee's Github repo: *<https://github.com/baugh20s/e2>*

*Answer the following questions in regards to the student's project you are reviewing. Include code snippets in your answers when relevant.*


### Are you able to produce any errors or unexpected results?
No
I did, however, notice an inconsistency between the README.md and the game:
> If the user doesn't select anything, tell them to select a play. 

This functionality was referenced in README.md and attempted in process.php, but I wasn't able to reproduce it.


### Referencing the course nots on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
Design C: 
process.php receives the data from the form on index.php, stores the information in the session  and redirects to index.php.

index-controller.php retrieves the information from the session and displays it on index.php


### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)? 
Not observed.

### Are there aspects of the code that you feel were not self-evident and would benefit from comments?
No.

### List any/all built-in PHP methods used with a brief summary of what the method does

array - create an array, for example 
```php 
$moves = [
    'rock',
    'paper',
    'scissors',
];
```

rand - Generate a random integer (defines the player moves)
header - Send a raw HTTP header (redirects the back to index.php)
session_start - Start new or resume existing session
$_SESSION - superglobal that stores the data in a session
$_GET - variable used to collect data from the form witht he method GET
if / else if / else  statement - defined the conditions
session_start - Start new or resume existing session
isset - Determine if a variable is declared and is different than NULL
true/false - bullean statements equal to 0 and 1
require - connects index-controller.php to index.php (copies the code from the controller the ther viewer)
echo - outputs the infromation (from the controller th toe viewer)

### Are there any parts of the code that you found interesting or taught you something new?
Line 32 in process.php
```php
$user == 'select'
```
I found it interesting, but I don't understand why it doesn't work.

### Are there any parts of the code that you don't understand?
Line 50 in process.php
```php
$result = $results['unknown'];
```
I don't understand what 'unknown' condition is and how it will be determined.

### Are there any best practices discussed in course material that you feel were not addressed in the code?
The link in the README.md is not clickable.
DRY: The elseif statements could be consolidated into two statements:

```php
} elseif ($user == 'rock' AND $computer == 'paper') {
    $result = $results['ComputerWin'];
} elseif ($user == 'rock' AND $computer == 'scissors') {
    $result = $results['UserWin'];
} elseif ($user == 'paper' AND $computer == 'rock') {
    $result = $results['UserWin'];
} elseif ($user == 'paper' AND $computer == 'scissors') {
    $result = $results['ComputerWin'];
} elseif ($user == 'scissors' AND $computer == 'rock') {
    $result = $results['ComputerWin'];
} elseif ($user == 'scissors' AND $computer == 'paper') {
    $result = $results['UserWin'];
```

```php
} elseif (($user == 'rock' AND $computer == 'paper') || ($user == 'paper' AND $computer == 'scissors') || ($user == 'scissors' AND $computer == 'rock')) {
    $result = $results['ComputerWin'];
} elseif (($user == 'rock' AND $computer == 'scissors') || ($user == 'paper' AND $computer == 'rock') || ($user == 'scissors' AND $computer == 'paper')) {
    $result = $results['UserWin'];
} 
```

### Do you have any additional comments not covered in the above questions?
No
