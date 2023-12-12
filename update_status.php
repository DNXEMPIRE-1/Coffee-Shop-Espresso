<?php

require_once "config.php";

$order_id=mysqli_real_escape_string($conn, $_POST['order_id']);
$status=mysqli_real_escape_string($conn, $_POST['status']);


$sql = "UPDATE orders SET status= '$status' WHERE order_id='$order_id'";

if($conn->query($sql) === TRUE)
echo 'true';
else
echo 'false';
?>