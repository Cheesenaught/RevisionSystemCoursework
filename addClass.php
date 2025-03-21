<?php
include_once("connection.php");
session_start();
print_r($_SESSION);
//header('Location: addClassInter.php');
    $hashed_password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
    array_map("htmlspecialchars", $_POST);
    $_SESSION['ClassName']=$_POST['ClassName'];
    $_SESSION['TeacherName']=$_POST['TeacherName'];
    $stmt = $conn->prepare("INSERT INTO TblClasses (ClassID,Subject,ClassName,Email,TeacherName,Open,ClassTeacherID,Password)VALUES (null,:Subject,:ClassName,:Email,:TeacherName,:Open,:ClassTeacherID,:Password)");
    $stmt->bindParam(':Subject', $_POST["Subject"]);
    $stmt->bindParam(':ClassName', $_POST["ClassName"]);
    $stmt->bindParam(':Email', $_POST["Email"]);
    $stmt->bindParam(':TeacherName', $_POST["TeacherName"]);
    $stmt->bindParam(':Open', $_POST["Open"]);
    $stmt->bindParam(':ClassTeacherID', $_SESSION["UserID"]);
    $stmt->bindParam(':Password', $hashed_password);
    $stmt->execute();
    $conn=null;
?>


