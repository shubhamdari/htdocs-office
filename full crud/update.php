<?php
include 'config.php';

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass$password'];
    $gender = $_POST['gender'];
    $file = $_POST['file'];
    $city = $_POST['city'];
    $hobbies = implode(',', $_POST['hobbies']);    
    

    $sql  = "UPDATE `employe_regsitration_form` SET `name`='$name',`birth`='$birth',`email`='$email',
    `phone`='$phone',`password`='$password',`gender`='$gender' ,`file`='$file',
    `city`='$city',`hobbies`='$hobbies' WHERE `id`= '$id'";

    if(mysqli_query($conn , $sql)){
        header('location:index.php');
    }else{
        echo mysqli_connect_error();
    }
}
?>