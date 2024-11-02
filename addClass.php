<?php
include_once("connection.php");

header('Location: class.php');
switch($_POST["Open"]){
  case "Closed":
    $Open=0;
    break;
  case "Open":
    $Open=1;
    break;

    }
    $hashed_password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
    array_map("htmlspecialchars", $_POST);
    $stmt = $conn->prepare("INSERT INTO TblClasses (ClassID,Subject,ClassName,Email,TeacherName,Open,ClassTeacherID,Password)VALUES (null,:Subject,:ClassName,:Email,:TeacherName,:null,:ClassTeacherID,:Password,:)");
    $stmt->bindParam(':ClassID', $_POST["ClassID"]);
    $stmt->bindParam(':Subject', $_POST["Subject"]);
    $stmt->bindParam(':ClassName', $_POST["ClassName"]);
    $stmt->bindParam(':Email', $_POST["Email"]);
    $stmt->bindParam(':TeacherName', $_POST["TeacherName"]);
    $stmt->bindParam(':Open', $Open);
    $stmt->bindParam(':ClassTeacherID', $_POST["ClassTeacherID"]);
    $stmt->bindParam(':Password', $hashed_password);
    $stmt->execute();
    $conn=null;
    
print_r($_POST);
?>