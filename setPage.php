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
$stmt = $conn->prepare("SELECT * FROM TblSets WHERE SetID = ".$_POST["id"]);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$SETID=$row['SetID'];
$SETNAME=$row['SetName'];
$USERID=$row['UserID'];
$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE UserID = ".$USERID);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<h1 style="text-align:left; padding-left: 25%;  color:#000;"><?php echo($SETNAME);?></h1>
<h3 style="text-align:left; padding-left: 25%; color:#000;">By: <?php echo($row['Forename']);echo(" "); echo($row['Surname']);?></h1>
<br>
<div class="col-sm-5" style="padding-left: 25%">
   <?php
   $stmt = $conn->prepare("SELECT * FROM TblQuestions WHERE SetID = ".$SETID);
   $stmt->execute();
   ?>
</div>
<div class="col-sm-4" style="padding-left: 25%">
   <button onclick="document.location='Revise.php'">Start Set</button><br>
   <button onclick="document.location='Revise.php'">Test </button>
   <?php
   if $USERID=$_SESSION['UserID']
   ?>
</div>
</body>
</html>