<?php
include_once("connection.php");
session_start();
header('Location: classesHome.php');
    $stmt = $conn->prepare("INSERT INTO TblQuestions (QuestionID,Question,Answer)VALUES (null,:Question,:Answer)");
    /*binds the variables so they can be added*/
    $stmt->bindParam(':Question', $_POST["Question"]);
    $stmt->bindParam(':Answer', $_POST["Answer"]);
    $stmt->execute();
    $conn=null;
?>

