<?php

include 'config.php';
$id = $_GET['id'];

$sql ="UPDATE `april_table1` SET `deleted_at`=0  Where id=$id" ;

if(mysqli_query($conn , $sql)){
    header("location:restore.php");
}else{
    echo "Error";
}
?>