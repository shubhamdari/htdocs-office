<?php
include 'config.php';
$id = $_GET['id'];
$sql = "UPDATE `login_register` SET `deleted_at`='1' WHERE id = $id";
if(mysqli_query($conn , $sql)){
    header("location:admin.php");
}else{
    echo "Error";
}
?>