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
    $stmt->bindParam(':SetID', $_POST["ClassID"]);
    $stmt->bindParam(':Subject', $_POST["Subject"]);
    $stmt->bindParam(':SetName', $_POST["ClassName"]);
    $stmt->bindParam(':Open', $_POST["Email"]);
    $stmt->bindParam(':UserID', $_POST["TeacherName"]);
    $stmt->bindParam(':Password', $hashed_password);
    $stmt->execute();
    $conn=null;
    
print_r($_POST);
?>