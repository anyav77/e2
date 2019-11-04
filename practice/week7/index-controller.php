<?php

require 'Catalog.php';

$catalog = new Catalog('products.json');

$catalog->getByID(9);

// var_dump($catalog->products);
// var_dump($catalog->getAll());

var_dump($catalog->searchByName("Cheerios"));
