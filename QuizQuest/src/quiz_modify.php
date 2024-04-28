<?php

use Fhooe\Router\Router;

require_once("functions.php");

// Modify the given quiz
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pdo = connectToDatabase();

    // TODO Begin: Implement the update of the quiz using PDO. Hint: The data is submitted using POST. 
    
    // TODO End

    // Redirect to the quiz_overview.html.twig using the router
    Router::redirectTo('/quizoverview');
}