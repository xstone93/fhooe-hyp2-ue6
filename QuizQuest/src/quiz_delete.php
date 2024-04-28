<?php

use Fhooe\Router\Router;

require_once("functions.php");

// Delete the quiz with the given id
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pdo = connectToDatabase();

    // TODO Begin: Implement the deletion of a quiz using PDO. 
    
    // TODO End

    // Redirect to the quiz_overview.html.twig using the router
    Router::redirectTo('/quizoverview');
}

?>
