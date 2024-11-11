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
  Date of Job:<input type="date" name="DateOfJob"><br>
  Last name:<input type="text" name="Surname"><br>
  Password:<input type="password" name="Password"><br>
  Email:<input type="text" name="Email"><br>
  <!--Creates a drop down list-->
  Gender:<select name="Gender">
    <option value="M">Male</option>
    <option value="F">Female</option>
    <option value="U">Prefer not to say</option>
  </select>
  <br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type="radio" name="AccessLvl" value="Pupil" checked> Pupil<br>
  <input type="radio" name="AccessLvl" value="Teacher"> Teacher<br>
  <input type="radio" name="AccessLvl" value="Admin"> Admin<br>
  <input type="submit" value="Add User">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblUsers");
$stmt->execute();
?>
</body>
</html>