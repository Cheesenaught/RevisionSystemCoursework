<?php
include_once("connection.php");
session_start();
print_r($_SESSION);
header('Location: classesHome.php');
    $hashed_password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
    array_map("htmlspecialchars", $_POST);
    $stmt = $conn->prepare("INSERT INTO TblClasses (QuestionID,Question,Answer)VALUES (null,:Question,:Answer)");
    $stmt->bindParam(':Question', $_POST["Question"]);
    $stmt->bindParam(':Answer', $_POST["Answer"]);
    $stmt->execute();
    $conn=null;
?>