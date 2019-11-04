<?php

// require "Number.php";
// require "EvenNumber.php";
// require "Debug.php";

// use E2\Number;
// use E2\EvenNumber;
// use E2\Debug;

// $example1 = new Number(21);
// // var_dump($example1->getHalf());
// var_dump($example1->isValid());
// var_dump($example1->num);

// $example2 = new EvenNumber(21);
// //var_dump($example2->getHalf());
// var_dump($example2->isValid());
// var_dump($example1->num);

require __DIR__.'/vendor/autoload.php';

use RPS\Game;

$game = new Game();

# Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
$game->play('rock');

App\Debug::dump(['a', 'b', ['x', 'y', 'z']]);
