<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheet.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top" style="color: #7badf8;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right"style="margin-top:15px">
        <li><a href="setPage.html">Sets</a></li>
        <li><a href="classesHome.php">Classes</a></li>
        <li><a href="#Members">Assignments</a></li>
        <li><a href="settings.php"><img src="settings.png" alt="Settings" style="height: 25px; width: 25px;"></a></li>
        <?php
        if(!isset ($_SESSION["UserID"])){
          echo('<li><a href="login.php">login</a></li>');
        }
        else{
          echo('<li><a href="LogOut.php"><img src="logOut.png" alt="Log out" style="height: 25px; width: 25px;"></a></li>');
        }
        ?>
        <li class="dropdown"> 
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br><br><br>
</body>
</html>