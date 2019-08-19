<?php

//creates a connection
$conn = new mysqli("localhost", "root", "password", "sys");

//checks connection
if($conn->connect_error){
    die ("Connection failed: " .$conn->connect_error);
}

