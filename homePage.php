<!DOCTYPE html>
<html lang="en">
<head>
<?php
include "connection.php";
session_start();
?>
</head>
<body>
<?php include_once("navbar.php")?>
<?php echo($_SESSION['UserID']); ?>
</body>
</html>