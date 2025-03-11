<!DOCTYPE html>
<html>
<head>
    <title>Add Inter</title>
    <?php include_once("navbar.php") ?>
</head>
<body>
<?php
?>

<form action="addClassInter.php" method = "POST">
  UserID:<input type="text" name="UserID"><br>
  ClassID:<input type="text" name="ClassID"><br>
  <!--Creates a drop down list-->
  <input type="submit" value="Add Inter">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUserClassInters");
$stmt->execute();
?>
</body>
</html>