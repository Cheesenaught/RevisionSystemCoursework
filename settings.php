<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Settings</title>
    <?php include_once("connection.php"); ?>
    </head>
<body>
<?php include_once("navbar.php");
if(isset ($_SESSION["UserID"])){
  $stmt = $conn->prepare("SELECT * FROM TblUsers WHERE UserID = ".$_SESSION["UserID"]);
  $stmt->execute(); 
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      echo("Forename: " . $row["Forename"] . "<br>");
      echo("Surname: " . $row["Surname"] . "<br>");
  }
}
?>
</body>
</html>