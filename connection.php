<?php
// Sets the variable names for the page to find and login to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "options";

//attempts connection to the database
try {
    //uses the entered variables to login
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    //returns error message if connection fails
    echo "Connection failed: " . $e->getMessage();
    }
?>

