<?php
include_once ("connection.php");
session_start();

array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM TblUsers WHERE surname =:username ;" );
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    print_r($row);
    $hashed= $row['Password'];
  
    $attempt= $_POST['Password'];
if(password_verify($attempt,$hashed)){
    $_SESSION['name']=$row["Surname"];
    $_SESSION['UserID']=$row["UserID"];
    if (!isset($_SESSION['backURL'])){
        $backURL= "class.php"; //Sets a default destination if no BackURL set (parent dir)
    }else{
        $backURL=$_SESSION['backURL'];
    }
    unset($_SESSION['backURL']);
    header('Location: ' . $backURL);
}else{
    echo("fail");
    header('Location: login.php');
}

}  
$conn=null;
?>