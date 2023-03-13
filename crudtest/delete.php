<?php
include "config.php";
$id = $_GET['id'];

$sql = "DELETE FROM `employe_regsitration` WHERE id=$id";

if(mysqli_query($conn , $sql)){
    header("location: index.php");
    echo "Delete Successfully";
 }else{
    echo "Error" . mysqli_error($conn);
 }


?>