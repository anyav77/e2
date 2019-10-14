<?php

session_start();

if (isset($_SESSION['results'])){
    $results = $_SESSION['results'];
    $showResults = true;
    $_SESSION['results'] = null;
}else{
    var_dump($_SESSION['results']);
    $showResults = false;
}