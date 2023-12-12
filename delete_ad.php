<?php
require_once "config.php";
$id=mysqli_real_escape_string($conn, $_GET["id"]);

$sql = "DELETE FROM menu WHERE menu_id='$id'";

if ($conn->query($sql) === TRUE)
{
unlink('assets\img\menu/'.$id.'.png');
header("location:menu_ad.php?mssg=true ");
}
else
header("location:menu_ad.php?mssg=false ");
?>