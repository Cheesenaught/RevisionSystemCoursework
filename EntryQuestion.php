<!DOCTYPE html>
<html>
<head>
    <title>Add Question</title>
    <?php include_once("navbar.php") ?>
</head>
<body>
<?php
session_start();
?>
<form action="addQuestion.php" method = "POST">
  Question:<input type="text" name="Question"><br>
  Answer:<input type="text" name="Answer"><br>
  <!--SetID:<input type="text" name="SetID"><br>-->
  <input type="submit" value="Add Question">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblQuestions");
$stmt->execute();
?>
</body>
</html>

