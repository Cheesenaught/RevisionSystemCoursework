<?php
include_once("connection.php");
session_start();
header('Location: classesHome.php');
    $stmt = $conn->prepare("INSERT INTO TblUserClassInters (InterID,UserID,ClassID)VALUES (null,:UserID,:ClassID)");
    /*binds the variables so they can be added*/
    $stmt->bindParam(':UserID', $_POST["UserID"]);
    $stmt->bindParam(':ClassID', $_POST["ClassID"]);
    $stmt->execute();
    $conn=null;
?>