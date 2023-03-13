<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM `student_register_from` WHERE id = '$id'";
if(mysqli_query($conn , $sql)){
    header('location:index.php');
    echo "Successfully";
}else{
    echo "Error" . mysqli_error($conn);
}

?>