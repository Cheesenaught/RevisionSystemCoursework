<?php
include_once("connection.php");
if(!isset($_COOKIE["PHPSESSID"]))
{
  session_start();
} 

header('Location: assignment.php');
    array_map("htmlspecialchars", $_POST);
    $stmt = $conn->prepare("INSERT INTO TblAssignments (AssignmentID,SetID,Description,DueDate)VALUES (null,:SetID,:Description,:DueDate,:)");
    $stmt->bindParam(':AssignmentID', $_POST["AssignmentID"]);
    $stmt->bindParam(':SetID', $_POST["SetID"]);
    $stmt->bindParam(':Description', $_POST["Description"]);
    $stmt->bindParam(':DueDate', $_POST["DueDate"]);
    $stmt->execute();
    $conn=null;
    
print_r($_POST);
?>

