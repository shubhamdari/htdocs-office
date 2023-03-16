<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php?msg=session_expire');
    die;
}
?>