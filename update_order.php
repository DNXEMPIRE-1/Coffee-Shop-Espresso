<?php

require_once "config.php";

$id=mysqli_real_escape_string($conn, $_POST['id']);
$quan=mysqli_real_escape_string($conn, $_POST['quan']);


$sql = "UPDATE menu SET no_order= no_order + '$quan' WHERE menu_id='$id'";

if($conn->query($sql) === TRUE)
echo 'true';
else
echo 'false';
?>