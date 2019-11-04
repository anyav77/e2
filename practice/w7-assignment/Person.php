<?php

class Person
{

    #Properties
    public $firstName;
    public $lastName;
    public $age;

    #Methods
    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function fullName()
    {
        $fullname = $this->firstName . " " . $this->lastName;
        return $fullname;
    }

    public function getClassification()
    {
        // $age = $this->age;
        // if ($age >= 18) {
        //     return "adult";
        // } else {
        //     return "minor";
        // }

        //example
        // if ($this->age >= 18) {
        //     return "adult";
        // } else {
        //     return "minor";
        // }

        // example 2
        return ($this->age >= 18) ? "adult" : "minor";
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
