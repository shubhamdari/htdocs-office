<?php 
include 'config.php';
$id = $_GET['id'];
$sql = "UPDATE `pagination_crud_form` SET `deleted_at`=`1` WHERE id = $id";

if(mysqli_query($conn , $sql)){
    header("location:index.php");
}else{
    echo "Error" . mysqli_connect_error();
}

?>