<!DOCTYPE html>
<html>
<head>
    
    <title>Add Assignment</title>
    <?php include_once("navbar.php"); ?>
    
</head>
<body>
<?php
session_start();
include_once('connection.php');
?>
<form action="addAssignment.php" method = "POST">
<!--Creates an input box which you can either input the date or use a calender to select the date-->
  Due Date:<input type="date" name="DueDate"><br>
  SetID:<input type="text" name="SetID"><br>
  hi:<input type="text" name="ClassID"><br>
  <!--Creates a large textbox which allows you to add a paragraph -->
  Description:<br><textarea name="Description" cols="60" rows="9"></textarea><br>

  <br>
<!--creates a button to submit the form-->
  <input type="submit" value="Add Assignment">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblAssignments");
$stmt->execute();
?>
</body>
</html>

