<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM `student_set` WHERE id = '$id'";
if(mysqli_query($conn , $sql)){
    header("location:index.php");
    echo "Delete Successfully";
}else{
    echo "error". mysqli_error($conn);
}
?>