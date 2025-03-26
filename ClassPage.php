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
<?php 
include_once("navbar.php");
//$_POST["id"]
$stmt = $conn->prepare("SELECT * FROM TblClasses WHERE ClassID = ".$_POST["id"]);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1 style="text-align:left; padding-left: 25%;"><?php echo($row['ClassName']);?></h1>
<h3 style="text-align:left; padding-left: 25%; color:#000;"><?php echo($row['TeacherName']);?></h3>
<br>

<div class="col-sm-1" style="padding-left: 25%;"></div>
<div class="col-sm-3" style="background-color:#7badf8">
   Assignments:
   <?php
   //prepares an SQL statment to fetch the set name and the set id from the assignment that it is a part of
   $stmt = $conn->prepare("SELECT SetID, SetName FROM TblSets 
   WHERE EXISTS (SELECT ClassID 
   From TblAssignments 
   WHERE ClassID=" . $_POST['id'] . " 
   AND TblAssignments.SetID=TblSets.SetID  )" );
   $stmt->execute();
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      // Creates a form that directs the user to setPage.php once submitted
      // uses hidden type to bind the value while making sure it isnt changed
      echo('
      <form action="setPage.php" method = "POST">
      <input type="hidden" value=' . $row["SetID"]  .' name="id">
      <div style="col-sm-5">'. $row["SetName"] .'  <input type="submit"   value="Go to"></div>
      </form><br>');
   }
   ?>
</div>
<div class="col-sm-1" ></div>
<div class="col-sm-2" style="background-color:#7badf8">
   Members:
   <?php
   //prepares an SQL statment to fetch the first and last name from one of the users details
   $stmt = $conn->prepare("SELECT Forename, Surname FROM TblUsers 
   WHERE EXISTS (SELECT UserID 
   From TblUserClassInters 
   WHERE ClassID=" . $_POST['id'] . " 
   AND TblUserClassInters.UserID=TblUsers.UserID  )" );
   $stmt->execute();
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      // Creates a form as this allows the iteration in php still print out the desired outcome
      echo('
      <form action="setPage.php" method = "POST">
      <div style="col-sm-5">'. $row["Forename"] .' '. $row["Surname"] .'</div>
      </form><br>');
   }
   ?>
</div>
</body>
</html>