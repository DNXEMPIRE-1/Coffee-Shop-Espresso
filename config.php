<?php
$conn=new mysqli($your_servername, $your_username, $your_password, $your_dbname);

if($conn->connect_error)
die("Connection error is ".$conn->connect_error);
?>