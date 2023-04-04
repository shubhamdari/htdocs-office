<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $file = $_POST['file'];
    $city = $_POST['city'];
    $hobbies = implode(',', $_POST['hobbies']);

    $sql = "UPDATE `login_register_user_form` SET `name`='$name',`email`='$email', `password`='$password',
    `gender`='$gender',`file`='$file',`city`='$city',`hobbies`='$hobbies' WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        // echo mysqli_error($conn);
        // echo $sql;
        header("location:index.php");
    } else {
        echo "Error";
    }
}
