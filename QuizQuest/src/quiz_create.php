<?php
require_once("functions.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = connectToDatabase();

    // TODO Begin: Implement the creation of a new quiz using PDO. 
    
    // TODO End

    // Informing user in case of successful registration in the register.html.twig file
    $twig->display("quiz_modify.html.twig", ['success' => 'The quiz was created!']);
    
}
?>