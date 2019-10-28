<?php

class Catalog
{

    #Properties
    public $products = [];

    #Methods
    public function __construct()
    {
        $json = file_get_contents('products.json');
        $products = json_decode($json, true);
        var_dump($products);
    }

    public function getAll()
    {
    }
}
