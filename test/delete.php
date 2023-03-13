<?php
// connection file
include "config.php";
$id = $_GET['id'];

$sql = "DELETE FROM `students` WHERE id = '$id'";

  if(mysqli_query($conn , $sql)){
      header("location: index.php");
      echo "Delete Successfully";
    }else{
     echo "Error " . mysqli_error($conn);
    }



 
?>



