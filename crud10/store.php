<?php
include 'connect.php';

$name = "";
$email = "";
$pass = "";
$phone = "";
$gender = "";
if (isset($_POST['submit'])) {
    $ok = true;
    if (!isset($_POST['name']) or $_POST['name'] == "") {
        $ok = false;
    } else {
        $name = $_POST['name'];
    }

    if (!isset($_POST['email']) or $_POST['email'] == "") {
        $ok = false;
    } else {
        $email = $_POST['email'];
    }

    if (!isset($_POST['pass']) or $_POST['pass'] == "") {
        $ok = false;
    } else {
        $pass = $_POST['pass'];
    }

    if (!isset($_POST['phone']) or $_POST['phone'] == "") {
        $ok = false;
    } else {
        $phone = $_POST['phone'];
    }

    if (!isset($_POST['gender']) or $_POST['gender'] == "") {
        $ok = false;
    } else {
        $gender = $_POST['gender'];
    }

    if ($ok == true) {
        $sql = "INSERT INTO `form`(name , email , pass , phone , gender)
    VALUES('$name' , '$email' , '$pass' , '$phone' , '$gender');";

      if (mysqli_query($conn, $sql)) {
        header('location: index.php');
            echo "insert data into database";
        } else {
            die('connection failed' . mysqli_error($conn));
        }
    } else {
        header('location: create.php');
    }
}
?>