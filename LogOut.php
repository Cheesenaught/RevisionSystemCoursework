<?php
if(isset($_COOKIE["PHPSESSID"]))
{
  session_destroy();
} 
header('Location: homePage.php');
?>

