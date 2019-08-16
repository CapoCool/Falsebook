<?php


//create db connection
$conn = new mysqli("localhost", "root", "password", "sys");
        
//check connection
if ($conn->connect_error){
    die ("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['email']) != "" || ($_POST['password']) != '' || ($_POST['first'] != '' || ($_POST['last']) !='')){

$fName = $conn->real_escape_string($_POST['first']);
$lName = $conn->real_escape_string($_POST['last']);
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['psw']);

$sql="INSERT INTO users (email, password, firstName, lastName) VALUES "
        . "('".$email."','".$password."', '".$fName."', '".$lName."')";

if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>
}


 
