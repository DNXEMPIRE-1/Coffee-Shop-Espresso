<?php
session_start();
unset($_SESSION['login_ad']);

echo "hbecjeh";
header("location:login_ad.php?logout=true");

?>
