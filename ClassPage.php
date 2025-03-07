<?php
if(!isset($_COOKIE["PHPSESSID"]))
{
  session_start();
} 
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  
   <title>Classes</title>
   <link rel="stylesheet" href="stylesheet.css">
  
</head>
<body>
<?php include_once("navbar.php"); ?>

<h1 style="text-align:left; padding-left: 25%;">Classes</h1>

<br>
<?echo($Classes)?>
<? foreach ($Classes as $Class): ?>
   <?echo($Class)?>
   <button style="background-color:#7badf8" onclick="document.location='class.php'" onclick="<?$_SESSION['Class'] = $Class.ClassID; ?>">Add Class</button>
   
   <? $Class['ClassID']; ?>


</body>
</html>