<?php
session_start();
$_SESSION['auth'] = 0;
header('location:login.php');
?>
