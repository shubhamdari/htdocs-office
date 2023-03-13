<?php
include "config.php";

if(isset($_POST['name'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $desgination = $_POST['desgination'];
    $email = $_POST['email'];
    $hobbies = $_POST['hobbies'];
    $shift = $_POST['shift'];

    $sql = "UPDATE `employe_regsitration` SET `name`='$name',`age`='$age',`salary`='$salary',
    `desgination`='$desgination',`email`='$email',`hobbies`='$hobbies',`shift`='$shift' WHERE id=$id";
     
     if(mysqli_query($conn , $sql)){
        header("location: index.php");
        echo "Insert data into database";
     }else{
        echo "Error" . mysqli_error($conn);
     }
}

?>