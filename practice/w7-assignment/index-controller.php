<?php

require 'Person.php';

$foo = null;
$person = new Person('John', 'Harvard', 45);

echo $person->firstName; # Should print "John"

echo $person->fullName(); # Should print "John Harvard"

echo $person->getClassification(); # Should print "adult"

//var_dump($person);
