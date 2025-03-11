<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Settings</title>
    <?php include_once("connection.php"); ?>
    </head>
<body>
<?php include_once("navbar.php");
session_start();
if(isset ($_SESSION["UserID"])){
  $stmt = $conn->prepare("SELECT * FROM TblUsers WHERE UserID = ".$_SESSION["UserID"]);
  $stmt->execute(); 
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      echo("Forename: " . $row["Question"] . "<br>");
      echo("Surname: " . $row["Surname"] . "<br>");
  }
}
?>
</body>
</html>