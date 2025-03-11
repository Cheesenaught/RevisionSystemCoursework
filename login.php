<!DOCTYPE html>
<html>
<head>
  
   <title>Login</title>
   <link rel="stylesheet" href="stylesheet.css">
  
</head>
<body>
<!-- adds the navbar and stylesheet to the page -->
<?php include_once("navbar.php") ?>
<!-- Creates a space between the navbar and the entry points -->
<br><br><br><br><br>
<!-- Creates a form with the username and password entry fields -->
<form action="loginprocess.php" method= "POST">
 Username:<input type="text" name="Username"><br>
 Password:<input type="password" name="Password"><br>
  <input type="submit" value="Login">
</form>

</body>
</html>

