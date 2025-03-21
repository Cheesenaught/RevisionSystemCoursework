<!DOCTYPE html>
<html>
<head>
    <title>Page title</title>
    <?php include_once("navbar.php"); ?>
</head>
<body>
<?php
session_start();
include_once('connection.php');
?>  

<form action="addClass.php" method = "POST">
  <!-- Creates an entry field for the typed inputs -->
  Subject:<input type="text" name="Subject"><br>
  Class name:<input type="text" name="ClassName"><br>
  Email:<input type="text" name="Email"><br>
  Teacher name:<input type="text" name="TeacherName"><br>
  <!-- Creates a textbox which has all text hidden unless told otherwise -->
  Password:<input type="password" name="Password"><br>
  <!--Creates a drop down list-->
  Open:<br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="Open" value="1" checked> Yes<br>
  <input type="radio" name="Open" value="0"> No<br>
  <input type="submit" value="Add Class">
</form>
<?php
$stmt = $conn->prepare("SELECT * FROM TblClasses");
$stmt->execute();
?>
</body>
</html>




