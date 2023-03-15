<?php
include 'config.php';
$id = $_GET['id'];

$sql = "DELETE FROM `employe_regsitration_form` WHERE id = '$id'";

if(mysqli_query($conn , $sql)){
    header('location:index.php');
}else{
    die('Connection Failed' . mysqli_connect_error());
}
?>