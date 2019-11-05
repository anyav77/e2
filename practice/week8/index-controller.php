<?php
session_start();

require __DIR__.'/vendor/autoload.php';

use App\Debug;

# Define array of moves - used in the view to display each move
$moves = ['rock', 'paper', 'scissors'];

# Extract the results from the session if they exist
$lastGame = $_SESSION['results']['lastGame'] ?? null;
$recentGames = $_SESSION['results']['recentGames'] ?? null;

# Clear the results of the last game
$_SESSION['results']['lastGame'] = null;
