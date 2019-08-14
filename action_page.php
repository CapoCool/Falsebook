<html>
<body>

<?php
//define variables and set them to empty values
$email = $fName = $lName = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = test_input($_POST["email"]);
	$fName = test_input($_POST["first"]);
	$lName = test_input($_POST["last"]);
	$password = test_input($_POST["psw"]);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?> 



</body>
</html>