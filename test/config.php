<?php
$host ="localhost";
$userName = "Dillan";
$pass = "girls775";
$dbName = "db_users";

//create db connection
$conn = new mysqli($host, $userName, $pass, $dbName);
        
//check connection
if ($conn->connect_error){
    die ("Connection failed: " . $conn->connect_error);
}

?>
        
        