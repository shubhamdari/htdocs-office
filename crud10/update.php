<?php
include 'connect.php';
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];


    $sql = "UPDATE `form` SET `name`='$name',`email`='$email',`pass`='$pass',
    `phone`='$phone',`gender`='$gender' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        header('location: index.php');
        echo "insert data into database";
    } else {
        die('connection failed' . mysqli_error($conn));
    }
}
?>