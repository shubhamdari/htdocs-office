<?php

include 'config.php';
$id = $_GET['id'];

$sql = "DELETE FROM `pagination_crud_prac` WHERE id = $id";


if(mysqli_query($conn , $sql)){
    header("location:index.php");
}else{
    echo "Error";
}
?>