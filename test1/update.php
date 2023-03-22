<?php
include 'config.php';
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $fileuploaded = $_POST['fileuploaded'];
    $hobbies = implode(',', $_POST['hobbies']);

    $sql = " UPDATE `studend_record` SET `name`='$name',`email`='$email',`password`='$password',`gender`='$gender',`phone`='$phone'
    ,`city`='$city',`fileuploaded`='$fileuploaded',`hobbies`='$hobbies' WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header('location:fetch_data.php');
    } else {
        echo 'Error' . mysqli_connect_error();
    }
}
