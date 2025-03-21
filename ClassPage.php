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
<?php
if($row['ClassTeacherID']=$_SESSION['UserID']){
   echo('hello');
}
?>
</body>
</html>