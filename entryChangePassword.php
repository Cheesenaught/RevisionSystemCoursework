<!DOCTYPE html>
<html>
<head>  
<!-- creates the name of the tab --> 
    <title>Change Password</title>
    <?php include_once("navbar.php") ?>  
</head>
<body>
<br><br><br><br>
<?php
//makes sure a session is running
if(!isset ($_SESSION["UserID"])){
  session_start();
}
?>
<form action="changePassword.php" method = "POST">
<!-- creates text boxes to input their new password -->
  New Password:<input type="password" name="Password"><br>
  <br>
  <input type="submit" value="Change Password">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers");
$stmt->execute();
?>
</body>
</html>

