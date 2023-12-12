<?php
session_start();
require_once "config.php";

$upname=mysqli_real_escape_string($conn, $_POST['upname']);
$upemail=mysqli_real_escape_string($conn, $_POST['upemail']);
$uppassword=mysqli_real_escape_string($conn, $_POST['uppassword']);

if(strlen($upname)<4)
echo 'upname';
else if(strlen($upemail)<=6)
echo 'eshort'; 
else if(filter_var($upemail, FILTER_VALIDATE_EMAIL) === false)
echo 'eformat';
else if(strlen($uppassword)<6)
echo 'pshort';
else
{
$spassword=password_hash($uppassword,PASSWORD_BCRYPT,array('cost'=>12));
$query="SELECT * FROM user where  email='$upemail'";
$result=mysqli_query($conn,$query) or die(mysqli_error());
$num_row=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num_row < 1)
{
$ins=$conn->query("INSERT INTO user (name,email,password) VALUES ('$upname','$upemail','$spassword') ");

if($ins)
{
$_SESSION['login']= $conn->insert_id;
$_SESSION['name'] = $upname;
echo 'true';
}

}
else
echo 'false';

}


?>