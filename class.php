<!DOCTYPE html>
<html>
<head>
    <title>Page title</title>
    <?php include_once("navbar.php") ?>
</head>
<body>
<?php
session_start(); 
?>

<form action="addClass.php" method = "POST">
  Subject:<input type="text" name="Subject"><br>
  Class name:<input type="text" name="ClassName"><br>
  Email:<input type="text" name="Email"><br>
  Teacher name:<input type="text" name="TeacherName"><br>
  Password:<input type="password" name="Password"><br>
  <!--Creates a drop down list-->
  Open:<br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="Open" value="1" checked> Yes<br>
  <input type="radio" name="Open" value="0"> No<br>
  <input type="submit" value="Add Class">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblClasses");
$stmt->execute();
?>
</body>
</html>

