<?php

//opens a connection
$conn = new mysqli("localhost", "root", "password", "sys");

//checks connection
if($conn->connect_error){
    die ("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["email"]) != "" || ($_POST["password"])){
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $conn->real_escape_string($_POST["password"]);

    $sql = "SELECT email, password, FROM users ";

    if(!$result = $conn->query($sql)){
        die("An error has occurred, please try again later.");
    } else{
        echo ("You may now log in");
    }
}else{

echo $sql;

}
//I'll need to take email from sql database and compare it to the entered data. 

