<?php
include_once("connection.php");
session_start();
//header('Location: classesHome.php');
    $stmt = $conn->prepare("INSERT INTO TblQuestions (QuestionID,SetID,Question,Answer)VALUES (null,:SetID,:Question,:Answer)");
    /*binds the variables so they can be added*/
    $stmt->bindParam(':SetID', $_POST["SetID"]);    
    $stmt->bindParam(':Question', $_POST["Question"]);
    $stmt->bindParam(':Answer', $_POST["Answer"]);

    $stmt->execute();
    $conn=null;
print_r($_POST);
?>

