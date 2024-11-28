<?php
include_once("connection.php");

header('Location: homePage.php');
    $hashed_password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
    array_map("htmlspecialchars", $_POST);
    $stmt = $conn->prepare("INSERT INTO tblusers (UserID,AccessLvl,Gender,Forename,Surname,Email,Password)VALUES (null,:AccessLvl,:Gender,:Forename,:Surname,:Email,:Password)");
    $stmt->bindParam(':Forename', $_POST["Forename"]);
    $stmt->bindParam(':Surname', $_POST["Surname"]);
    $stmt->bindParam(':Gender', $_POST["Gender"]);
    $stmt->bindParam(':Email', $_POST["Email"]);
    $stmt->bindParam(':Password', $hashed_password);
    $stmt->bindParam(':AccessLvl', $_POST["AccessLvl"]);
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

