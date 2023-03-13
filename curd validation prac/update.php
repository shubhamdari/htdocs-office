<?php
include 'config.php';
$id = $_GET['id'];


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = implode(',',$_POST['course']);
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $file = $_POST['file'];


    $sql = "UPDATE `student_register_from` SET `name`='[$name]',`password`='[$password]',`email`='[$email]',`phone`='[$phone]'
    ,`course`='[$course]',`city`='[$city]',`gender`='[$gender]',`file`='[$file]' WHERE id = `$id`";


    if(mysqli_query($conn , $sql)){
        header('location:index.php');
        echo "insert data into database";
    }else{
        echo "Error" . mysqli_error($conn);
    }
}
?>