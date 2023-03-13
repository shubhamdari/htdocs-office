<?php
require 'config.php';

$fname = "";
$lname = "";
$email = "";
$mobile = "";
$pass = "";
$confirnpass = "";

if (isset($_POST['submit'])) {
    $ok = true;
    $errArr = [];
    if (!isset($_POST['fname']) or $_POST['fname'] == "") {
        $ok = false;
        array_push($errArr, "Enter Your First Name *");
    } else {
        array_push($errArr, "");
        $fname = $_POST['fname'];
    }

    if (!isset($_POST['lname']) or $_POST['lname'] == "") {
        $ok = false;
        array_push($errArr, "Enter Your Last Name *");
    } else {
        array_push($errArr, "");
        $lname = $_POST['lname'];
    }

    if (!isset($_POST['email']) or $_POST['email'] == "") {
        $ok = false;
        array_push($errArr, "Enter Your Email *");
    } else {
        array_push($errArr, "");
        $email = $_POST['email'];
    }

    if (!isset($_POST['mobile']) or $_POST['mobile'] == "") {
        $ok = false;
        array_push($errArr, "Enter Your Mobile *");
    } else {
        array_push($errArr, "");
        $mobile = $_POST['mobile'];
    }

    if (!isset($_POST['pass']) or $_POST['pass'] == "") {
        $ok = false;
        array_push($errArr, "Enter Password *");
    } else {
        array_push($errArr, "");
        $pass = $_POST['pass'];
    }

    if (!isset($_POST['confirnpass']) or $_POST['confirnpass'] == "") {
        $ok = false;
        array_push($errArr, "Passwords Don't Match");
    } else {
        array_push($errArr, "");
        $confirnpass = $_POST['confirnpass'];
    }

    if ($ok === true) {
        printf(
            'First Name : %s,
            Last Name : %s,
            Email : %s,
            Mobile : %s,
            Password : %s,
            Confirn Password : %s',
            htmlspecialchars($fname, ENT_QUOTES),
            htmlspecialchars($lname, ENT_QUOTES),
            htmlspecialchars($email, ENT_QUOTES),
            htmlspecialchars($mobile, ENT_QUOTES),
            htmlspecialchars($pass, ENT_QUOTES),
            htmlspecialchars($confirnpass, ENT_QUOTES)
        );

        if ($pass != $confirnpass) {
            header("location: register.php");
        }

        $sql = "INSERT INTO user( fname , lname , email , mobile , pass )
    VALUES('$fname' , '$lname' , '$email' , '$mobile' , '$pass' )";


        if (mysqli_query($conn, $sql)) {
            header("location: login.php");
            echo "Insert Into Datebase";
        } else {
            echo "Error" . mysqli_error($conn);
        }
    } else {
        $err = implode(",", $errArr);
        header("location: register.php?err=" . $err);
    }
}
?>