<?php
include 'config.php';

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $comment = $_POST['comment'];
    $city = $_POST['city'];
    $file = $_FILES['file']['name'];
    $hobbies = implode(',',$_POST['hobbies']);

   $sql =  "UPDATE `employee_register_form` SET `name`='$name',`email`='$email',`password`='$password',`phone`='$phone',
    `gender`='$gender',`comment`='$comment',`city`='$city',`file`='$file',`hobbies`='$hobbies' WHERE `id`= '$id'";

    if(mysqli_query($conn , $sql)){
        header('location:index.php');
    }else{
        echo 'Error' . mysqli_connect_error();
    }
}

?>