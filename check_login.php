<?php
session_start();
require_once "config.php";


$inemail=$_POST['inemail'];
$inpassword=$_POST['inpassword'];


$query="SELECT * FROM user where email='$inemail'";
$result=mysqli_query($conn,$query) or die(mysqli_error());
$num_row=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num_row >= 1)
{

if(password_verify($inpassword,$row['password']))
{
$_SESSION['login']= $row['id'];
$_SESSION['name'] = $row['name'];

echo 'true';
}
else
echo 'false';

}
else
echo 'false';




?>