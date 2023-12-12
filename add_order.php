<?php

require_once "config.php";

$name=mysqli_real_escape_string($conn, $_POST['name']);
$description=mysqli_real_escape_string($conn, $_POST['description']);
$status="in_progress";
$addr=mysqli_real_escape_string($conn, $_POST['addr']);
$amount=mysqli_real_escape_string($conn, $_POST['amount']);
$id=mysqli_real_escape_string($conn, $_POST['id']);

$sql = "INSERT INTO orders (id,name, description, status ,address,amount) VALUES ('$id','$name', '$description', '$status', '$addr', '$amount')";

if($conn->query($sql) === TRUE)
echo 'true';
else
echo 'false';
?>