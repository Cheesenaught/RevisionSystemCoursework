<!DOCTYPE html>
<html>
<head>
  
   <title>Login</title>
   <link rel="stylesheet" href="stylesheet.css">
  
</head>
<body>
<?php include_once("navbar.php") ?>
<br><br><br><br><br>
<form action="loginprocess.php" method= "POST">
 Username:<input type="text" name="Username"><br>
 Password:<input type="password" name="Password"><br>
  <input type="submit" value="Login">
</form>

</body>
</html>
