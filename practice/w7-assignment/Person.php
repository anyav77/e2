<?php

class Person
{

    #Properties
    public $firstName;
    public $lastName;
    public $age;

    #Methods
    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        //var_dump($firstName);
    }

    public function getFullName()
    {
    }
    // public function __construct()
    // {
    //     $json = file_get_contents('products.json');
    //     $products = json_decode($json, true);
    //     var_dump($products);
    // }

    // public function getAll()
    // {
    // }
}
