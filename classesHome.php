<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  
   <title>Classes</title>
   <link rel="stylesheet" href="stylesheet.css">
  
</head>
<body>
<?php include_once("navbar.php"); ?>

<h1 style="text-align:left; padding-left: 25%;">Classes</h1>

<br>
<?php
if(isset ($_SESSION["UserID"])){
   $stmt = $conn->prepare("SELECT ClassID, ClassName FROM TblClasses 
      WHERE EXISTS 
      (SELECT ClassID 
      From TblUserClassInters 
      WHERE UserID=" . $_SESSION['UserID'] . " 
      AND TblUserClassInters.ClassID=TblClasses.ClassID  )" );
}
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   showRequest($row);
}
?>

</body>
</html>


