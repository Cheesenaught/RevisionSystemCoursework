<?php
session_start();
include "connection.php";
//makes sure that the user does not previosly have a class id assigned to the session as
//this would automatically forward the user
unset($_SESSION['ClassID']);
?>
<!DOCTYPE html>
<html>
<head>
   <title>Classes</title>
   <!-- links the stylesheet to the page-->
   <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<?php //addds the navbar to the page
include_once("navbar.php"); ?>
<h1 style="text-align:left; padding-left: 25%;">Classes</h1>
<br>
<?php
if(isset ($_SESSION["UserID"])){
   //Creates SQL statment to retrieve what class' the user is part of from
   //the table TblUserClassInters
   $stmt = $conn->prepare("SELECT ClassID, ClassName FROM TblClasses 
      WHERE EXISTS 
      (SELECT ClassID 
      From TblUserClassInters 
      WHERE UserID=" . $_SESSION['UserID'] . " 
      AND TblUserClassInters.ClassID=TblClasses.ClassID  )" );
//runs the SQL Statment
$stmt->execute();
//uses while loop to display all class' that the user is part of
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
   // Creates a form that directs the user to ClassPage.php once submitted
   // uses hidden type to bind the value while making sure it isnt changed
   echo('
   <form action="ClassPage.php" method = "POST">
   <input type="hidden" value=' . $row["ClassID"]  .' name="id">
   <div class="col-sm-5" style="padding-left: 25%">'. $row["ClassName"] .'</div>
   <input type="submit"   value="Go to">
   </form><br>');
}
}
else{
   //As the user can only see classes logged in it automatically forwards the user
   header('Location: login.php');
}
?>
<!--button for if the user wants to add a class-->
<button style="background-color:#7badf8" onclick="document.location='EntryClass.php'">Add Class</button>   
</body>
</html>


