<?php

session_start();

var_dump($_SESSION['results']);
if (isset($_SESSION['results'])){
    $results = $_SESSION['results'];
    $showResults = true;
    $_SESSION['results'] = null;
}else{
    $showResults = false;
}
