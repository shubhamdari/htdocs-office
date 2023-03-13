<?php

// connection file
include "config.php";

// check conneciton
if(isset($_POST['update'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $course = $_POST['course'];

  


// database update query
    $sql = "UPDATE `students` SET  `name`='$name' , `mobile`='$mobile' , `gender`='$gender' , `email`='$email' , `course`='$course'
     WHERE `id` = '$id'";

     


// check connection    
    if(mysqli_query($conn , $sql)){
       header("location: index.php");
    }else{
        echo "Error " . mysqli_error($conn);
    }
}

?>

