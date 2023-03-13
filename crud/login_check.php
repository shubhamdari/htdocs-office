<?php
session_start();
require 'config.php';
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `user` WHERE email='$email'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);

    if ($row[5] == $pass) {
        if ($row[6] ==  1) {
            header("location: admin.php");
            $_SESSION['user'] = 'admin';
        } else {
            header("location: dashboard.php?id=" . $row[0]);
            $_SESSION['user'] = 'user';
        }
    } else {
        header("location: login.php");
    }
}
