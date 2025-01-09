<?php
include_once("connection.php");

//header('Location: homePage.php');
    array_map("htmlspecialchars", $_POST);
    $stmt = $conn->prepare("INSERT INTO TblSets (SetID,Subject,SetName,Open,UserID)VALUES (null,:Subject,:SetName,:Open,:UserID)");
    $stmt->bindParam(':Subject', $_POST["Subject"]);
    $stmt->bindParam(':SetName', $_POST["SetName"]);
    $stmt->bindParam(':Open', $_POST["Open"]);
    $stmt->bindParam(':UserID', $_SESSION["UserID"]);
    $stmt->execute();
    $conn=null;
    
print_r($_POST);
?>

