<!DOCTYPE html>
<html>
<head>   
    <title>Add User</title>
    <?php include_once("navbar.php") ?>  
</head>
<body>
<?php
//makes sure a session is running
if(!isset ($_SESSION["UserID"])){
  session_start();
}
?>
<form action="addusers.php" method = "POST">
<!-- creates text boxes to input their details -->
  First name:<input type="text" name="Forename"><br>
  Last name:<input type="text" name="Surname"><br>
  Password:<input type="password" name="Password"><br>
  Email:<input type="text" name="Email"><br>
  <!--Creates a drop down list-->
  Gender:<select name="Gender">
    <option value="0">Male</option>
    <option value="1">Female</option>
  </select>
  <br>
  <!--Next 3 lines create a radio button which we can use to select the Access Level-->
  <input type="radio" name="AccessLvl" value="0" checked> Pupil<br>
  <input type="radio" name="AccessLvl" value="1"> Teacher<br>
  <input type="radio" name="AccessLvl" value="2"> Admin<br>
  <input type="submit" value="Add User">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers");
$stmt->execute();
?>
</body>
</html>

