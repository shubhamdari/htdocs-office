<?php

include 'config.php';
$id = $_GET['id'];

$sql ="UPDATE `april_table1` SET `deleted_at`='1' WHERE id=$id";

if(mysqli_query($conn , $sql)){
    header("location:admin_dashboard.php");
}else{
    echo "Error soft delete";
}
?>