<?php
 
 require_once("functions.php");

 function getQuizzes()
 {
    // Get all open quizzes from the database
    $pdo = connectToDatabase();

    // TODO Begin: Receive all public quizzes from the table that are open and not closed yet. Return them as an array.
    
    // TODO End
 }

 function getQuizzesFromUser($userId)
 {
    // Get all quizzes from the database that are created by the user
    $pdo = connectToDatabase();

    $sql = "SELECT * FROM Game WHERE UserId = :userId";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();
    $quizzes = $stmt->fetchAll();
    return $quizzes;
 }

 function getQuiz($id)
 {
    // Get the quiz with the given id from the database
    $pdo = connectToDatabase();

    // TODO Begin: Receive a particular quiz from the table using the id and return it.
    
    // TODO End
 }

?>
