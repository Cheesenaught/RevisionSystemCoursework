<?php
include_once("connection.php");
session_start();

//header('Location: EntryAssignment.php');
    array_map("htmlspecialchars", $_POST);
    $stmt = $conn->prepare("INSERT INTO TblAssignments (AssignmentID,ClassID,SetID,DueDate,Description)VALUES (null,:ClassID,:SetID,:DueDate,:Description)");
    $stmt->bindParam(':Description', $_POST["Description"]);
    $stmt->bindParam(':SetID', $_POST["SetID"]);
    $stmt->bindParam(':ClassID', $_POST["ClassID"]);
    $stmt->bindParam(':DueDate', $_POST["DueDate"]);
    $stmt->execute();
    $conn=null;
    
print_r($_POST);
?>

