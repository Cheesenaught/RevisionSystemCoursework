<?php
session_start();
include "connection.php";
unset($_SESSION['ClassID']);
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
   //Creates SQL statment to retrieve what class' the user is part of from
   //the table TblUserClassInters
   $stmt = $conn->prepare("SELECT SetID, SetName FROM TblSets");
//runs the SQL Statment
$stmt->execute();
//uses while loop to display all class' that the user is part of
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   // Creates a form that directs the user to ClassPage.php once submitted
   // uses hidden type to bind the value while making sure it isnt changed
   echo('
   <form action="SetPage.php" method = "POST">
   <input type="hidden" value=' . $row["SetID"]  .' name="id">
   <div class="col-sm-5" style="padding-left: 25%">'. $row["SetName"] .'</div>
   <input type="submit"   value="Go to">
   </form><br>');
}
}
else{
   header('Location: login.php');
}
?>
<button style="background-color:#7badf8" onclick="document.location='EntrySet.php'">Add Set</button>   
</body>
</html>


