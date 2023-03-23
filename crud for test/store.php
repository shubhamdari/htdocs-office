<?php
include 'config.php';
session_start();

$validation = [];
$name = $email = $password = $phone = $gender = $comment = $city =  $filepath = $hobbies =  "";

if (empty($_POST["name"])) {
    $validation['nameErr'] = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $validation['nameErr'] = "Only letters and white space allowed";
    }
}

if (empty($_POST["email"])) {
    $validation['emailErr'] = "Email is required";
} else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation['emailErr'] = "Invalid email format";
    }
}

if (empty($_POST["password"])) {
    $validation['passwordErr'] = "Password is requried";
} else {
    $password = test_input($_POST["password"]);
}



if (empty($_POST["phone"])) {
    $validation['phoneErr'] = "Phone number is requried";
} else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^\\+?[1-9][0-9]{7,14}$/", $phone)) {
        $validation['phoneErr'] = "Phone number is requried";
    }
}


if (empty($_POST["gender"])) {
    $validation['genderErr'] = "Gender is required";
} else {
    $gender = test_input($_POST["gender"]);
}

if (empty($_POST["comment"])) {
    $validation['commentErr'] = "Comment is requried";
} else {
    $comment = test_input($_POST["comment"]);
}


if (empty($_POST["city"])) {
    $validation['cityErr'] = "City is Requried";
} else {
    $city = test_input($_POST["city"]);
}


if (empty($_FILES["file"]['name'])) {
    $validation['fileErr'] = "File is requried";
} else {
    if ($_FILES['file']['size'] < 10 * 1024 * 1024) {
        $filename = $_FILES['file']['name'];
        $filepath = './image/' . $filename;
        $tmpfile = $_FILES['file']['tmp_name'];
        move_uploaded_file($tmpfile, $filepath);
    } else {
        $validation['fileErr'] = "File too Big!";
    }
}



if (empty($_POST["hobbies"])) {
    $validation['hobbiesErr'] = "Hobbies is requried";
} else {
    $hobbies = test_input(implode(',', $_POST["hobbies"]));
}


$sql = "INSERT INTO employee_register_form(name , email , password , phone , gender , comment , city ,  file , hobbies)
VALUES('$name' , '$email' , '$password' , '$phone' , '$gender' , '$comment' , '$city' ,  '$filepath' , '$hobbies')";

if (count($validation) == 0) {
    mysqli_query($conn, $sql);
    $_SESSION['SUCCESS'] = 'Insert data into database';
    header('location:index.php');
}



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
