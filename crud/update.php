<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];
    $confirnpass = $_POST['confirnpass'];

    if ($pass != $confirnpass) {
        header("location: register.php");
    }

    $sql = "UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email'
    ,`mobile`='$mobile',`pass`='$pass' WHERE id=$id";


    if (mysqli_query($conn, $sql)) {
        header("location: dashboard.php?id=" . $id);
        echo "Insert Into Datebase";
    } else {
        echo "Error" . mysqli_error($conn);
    }
}
?>