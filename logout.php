<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['name']);

header("location:index.php?logout=true");
?>
