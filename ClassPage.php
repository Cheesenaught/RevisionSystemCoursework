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
echo($_SESSION['ClassID']);
if(isset ($_SESSION["ClassID"])){
   $stmt = $conn->prepare("SELECT * FROM TblClasses WHERE ClassID = " . $_SESSION['ClassID']);
}
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<h1 style="text-align:left; padding-left: 25%;"><?php echo($row['ClassName']);?></h1>

<br>


</body>
</html>