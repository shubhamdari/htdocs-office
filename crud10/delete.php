<?php
include 'connect.php';
$id = $_GET['id'];

$sql  = "DELETE FROM `form` WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    header('location: index.php');
    echo "delete successfully";
}else{
    die('Failed' . mysqli_error($conn));
}
?>