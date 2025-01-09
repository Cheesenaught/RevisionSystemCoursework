<!DOCTYPE html>
<html>
<head>
    
    <title>Add Assignment</title>
    
</head>
<body>
<?php
//session_start(); 
//if (!isset($_SESSION['name']))
//{   
//    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
//    header("Location:login.php");
//}
?>

<form action="addusers.php" method = "POST">
  Due Date:<input type="date" name="DateOfJob"><br>
  Description:<br><textarea cols="60" rows="9"></textarea>
  <br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="submit" value="Add Assignment">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers");
$stmt->execute();
?>
</body>
</html>

