<?php
include 'config.php';
session_start();
$email = $password = "";
if (empty($_POST["email"])) {
    $validation['emailErr'] = "Email is required";
} else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation['emailErr'] = "Invalid email format";
    }
}

if (empty($_POST['password'])) {
    $validation['passwordErr'] = "Password is required";
} else {
    $password = md5(test_input($_POST['password']));
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (count($validation) == 0) {
    $sql = "SELECT * FROM login_register WHERE `email`='$email' && `password`='$password'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
       
        $_SESSION['id'] = $row['id'];
        $_SESSION['auth'] = 1;
        $_SESSION['role_id'] = $row['role'];
        if ($row['role'] == 1) {
            header("location:admin.php"); 
        } else {
            $date = date("Y/m/d");
            $time = date("h:i:sa");
            $user_id = $row['id'];
            $sql = "INSERT INTO login_history(date , time , user_id) VALUES ('$date' , '$time' , '$user_id')";
            
            echo mysqli_error($conn);
            mysqli_query($conn, $sql);
            header("location:user_dashborad.php");
        }
    } else {
        header("location:login.php");
    }
}
