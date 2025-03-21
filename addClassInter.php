<?php
include_once("connection.php");
session_start();
$stmt = $conn->prepare("SELECT ClassID FROM TblClasses WHERE ClassName=" . $_SESSION['ClassName'] . " AND TeacherName=" . $_SESSION['TeacherName'] . "");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
unset($_SESSION['ClassName']);
unset($_SESSION['TeacherName']);

header('Location: classesHome.php');
    $stmt = $conn->prepare("INSERT INTO TblUserClassInters (InterID,UserID,ClassID)VALUES (null,:UserID,:ClassID)");
    //binds the variables so they can be added
    $stmt->bindParam(':UserID', $_SESSION["UserID"]);
    $stmt->bindParam(':ClassID', $row['ClassID']);
    $stmt->execute();
    $conn=null;
?>