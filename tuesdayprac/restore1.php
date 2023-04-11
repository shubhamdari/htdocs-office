<?php
include 'config.php';
$id = $_GET['id'];
$sql = "UPDATE `login_register` SET `deleted_at`='0' WHERE id = $id";
if(mysqli_query($conn , $sql)){
    header("location:restore.php");
}else{
    echo "Error";
}
?>