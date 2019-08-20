<?php
//create as follows password_hash(string you want to hash, algorithm you want to use (ARGON2 is considered))
//the best one to use
$password = 'test';
$hash = password_hash($password, PASSWORD_ARGON2I);
echo $hash;
?>

<br></br>
<?php
$hash = password_hash($password, PASSWORD_ARGON2I);
echo $hash;
?>