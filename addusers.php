<?php
include_once("connection.php");

//header('Location: users.php');
switch($_POST["AccessLvl"]){
  case "Pupil":
    $AccessLvl=0;
    break;
  case "Teacher":
    $AccessLvl=1;
    break;
  case "Admin":
    $AccessLvl=2;
    break;
    }
switch($_POST["Gender"]){
  case "M":
    $Gender=0;
    break;
  case "F":
    $Gender=1;
    break;
  case "U":
    $Gender=2;
    break;
    }
    $hashed_password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
    array_map("htmlspecialchars", $_POST);
    $stmt = $conn->prepare("INSERT INTO tblusers (UserID,AccessLvl,Gender,Forename,Surname,Email,Password)VALUES (null,:AccessLvl,:Gender,:Forename,:Surname,:Email,:Password)");
    $stmt->bindParam(':Forename', $_POST["Forename"]);
    $stmt->bindParam(':Surname', $_POST["Surname"]);
    $stmt->bindParam(':Gender', $Gender);
    $stmt->bindParam(':Email', $_POST["Email"]);
    $stmt->bindParam(':Password', $hashed_password);
    $stmt->bindParam(':AccessLvl', $AccessLvl);
    $stmt->execute();
    $conn=null;
    
echo $_POST["AccessLvl"]."<br>";
echo $_POST["Gender"]."<br>";
echo $_POST["Forename"]."<br>";
echo $_POST["Surname"]."<br>";
echo $_POST["Email"]."<br>";
echo $_POST["Password"]."<br>";

print_r($_POST);
?>
