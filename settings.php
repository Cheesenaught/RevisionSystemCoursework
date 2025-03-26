<!DOCTYPE html>
<html lang="en">
    <head>
<!-- give the tab a title -->
    <title>Settings</title>
    <!-- links the tables -->
    <?php include_once("connection.php"); ?>
    </head>
<body>
<!-- adds the navbar -->
<?php include_once("navbar.php");
session_start();
if(isset ($_SESSION["UserID"])){
  $stmt = $conn->prepare("SELECT * FROM TblUsers WHERE UserID = ".$_SESSION["UserID"]);
  $stmt->execute(); 
  // shows the user their name, UserID and email
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      echo("Forename: " . $row["Forename"] . "<br>");
      echo("Surname: " . $row["Surname"] . "<br>");
      echo("Email: " . $row["Email"] . "<br>");
      echo("UserID: " . $row["UserID"] . "<br>");
  } 
}
?>
<!-- button that directs you to changePassword.php -->
<button style="background-color:#7badf8" onclick="document.location='entryChangePassword.php'">Change Password</button> 
</body>
</html>

