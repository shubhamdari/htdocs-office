<?php
include 'config.php';
 
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $file = $_FILES['file'];
    $hobbies = implode(',',$_POST['hobbies']);

    $sql = "UPDATE `pagination_crud_form` SET `name`='$name',`email`='$email',`password`='$password',
    `gender`='$gender',`file`='$file',`hobbies`='$hobbies' WHERE id = $id";

    if(mysqli_query($conn , $sql)){
        header("location:index.php");
    }else{
        echo "error" . mysqli_connect_error();
    }
}
?>