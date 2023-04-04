<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM `login_register_user_form` WHERE id = $id";
if(mysqli_query($conn , $sql)){
    header("location:index.php");
}else{
    echo "Error";
}
?>