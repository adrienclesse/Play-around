<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
 ini_set('display_errors', '1');
 ini_set('display_startup_errors', '1');
 error_reporting(E_ALL);

session_start();

// Load you classes
require_once 'classes/GuessingGame.php';
function whatIsHappening() {

    echo '<h2>$_POST</h2>';
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    echo '<h2>$_SESSION</h2>';
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
}
whatIsHappening();
// Start the game
// As this game is rather simple, one class should be sufficient


// $chosenNumber="";
// $resultMessage="";

// if(isset($_POST['submit'])){
//     $secretNumber= rand(1, 10);
//     $chosenNumber= $_POST['chosenNumber'];
//    // var_dump($secretNumber);
//    // var_dump($chosenNumber);
//    // echo $secretNumber;
//     "<br>";
//    // echo $chosenNumber;

//     if($secretNumber==$chosenNumber)
//         {$resultMessage ="YOU WIIIIIN, " .$secretNumber. " was the right number";}
//     else 
//         {$resultMessage= "You've lost! The right number was ". $secretNumber;}
//}


$game = new GuessingGame();
$game->run();

//Show the $game obj deatils when building
 echo '<h2>$game</h2>';
 echo "<pre>";
 var_dump($game);
 echo "</pre>";
 echo "<br>";
require 'view.php';
