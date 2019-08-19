<?

//creates db connection
//will change for integration
$conn = new mysqli("localhost", "root", "password", "sys");

//checks connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

