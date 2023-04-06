<?php
include 'store.php';

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $file = $_POST['file'];
    $gender = $_POST['gender'];
    $hobbies = implode(',', $_POST['hobbies']);

    $sql = "UPDATE `pagination_crud_prac` SET `name`='$name',`email`='$email',`password`='$password'
    ,`file`='$file',`gender`='$gender',`hobbies`='$hobbies' WHERE id = $id";


    if(mysqli_query($conn  , $sql)){
        header("location:index.php");
    }
}
?>