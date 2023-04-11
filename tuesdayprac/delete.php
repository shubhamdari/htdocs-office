<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM `login_register` WHERE id = $id";
if(mysqli_query($conn , $sql)){
    header("location:restore.php");
}else{
    echo "Error";
}
?>