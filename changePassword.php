<?php
include_once("connection.php");
session_start();

header('Location: settings.php');
    $hashed_password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
    array_map("htmlspecialchars", $_POST);
    $stmt = $conn->prepare("UPDATE tblusers SET Password = :Password WHERE UserID=" . $_SESSION['UserID'] . "");
    $stmt->bindParam(':Password', $hashed_password);
    $stmt->execute();
    $conn=null;
print_r($_POST);
?>


