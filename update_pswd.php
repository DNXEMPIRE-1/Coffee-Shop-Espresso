<?php

require_once "config.php";

$email=mysqli_real_escape_string($conn, $_POST['email']);
$pass1=mysqli_real_escape_string($conn, $_POST['pass1']);
$pass2=mysqli_real_escape_string($conn, $_POST['pass2']);

if(strlen($pass1)<6)
echo 'p1short';
else if(strlen($pass2)<6)
echo 'p2short';
else if($pass1 != $pass2)
echo 'not_equall';
else
{
$spassword=password_hash($pass1,PASSWORD_BCRYPT,array('cost'=>12));

$sql = "UPDATE user SET password= '$spassword' WHERE email='$email'";

if($conn->query($sql) === TRUE)
echo 'true';
else
echo 'false';
}
?>