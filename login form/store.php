<?php
include 'config.php';

$validation = [];
$name = $email = $password = "";




if (empty($_POST["name"])) {
    $validation['nameErr'] = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $validation['nameErr'] = "Only letters and white space allowed";
    }
}

if (empty($_POST["email"])) {
    $validation['emailErr'] = "Email is required";
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation['emailErr'] = "Invalid email format";
    }
}


if (empty($_POST["password"])) {
    $validation['passwordErr'] = "password is required";
} else {
    $password = test_input($_POST["password"]);
}


if ($_POST['password'] != $_POST['confirm_password']) {
    $validation['passwordErr'] = "Password does not match";
}


$sql = "INSERT INTO login_register_form(name , email , password)VALUES('$name' , '$email' , '$password')";

if (count($validation) == 0) {
    mysqli_query($conn, $sql);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
