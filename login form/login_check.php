<?php
include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $validation = [];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (empty($email)) {
        $validation['emailErr'] = 'Err';
    }
    if (empty($password)) {
        $validation['passErr'] = 'Password is required';
    }

    if (count($validation) == 0) {

        $sql = "SELECT * FROM login_register_form WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] == $password) {
                echo "Good password";
                $_SESSION['user'] = $email;
                header('location:dashboard.php');
                die;
            } else {
                $validation['passErr'] = 'Password is Incorrect';
            }
        }
    }
}
?>