<?php
include 'config.php';

// define variables and set to empty values
$name = $email = $password = $gender = $phone = $city = $fileuploaded = $hobbies = "";
$validation = [];


if (empty($_POST["name"])) {
    $validation['nameErr'] = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $validation['nameErr']  = "Only letters and white space allowed";
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
    $validation['passwordErr'] = "Password is requried";
} else {
    $password = test_input($_POST["password"]);
}




if (empty($_POST["gender"])) {
    $validation['genderErr'] = "Gender is required";
} else {
    $gender = test_input($_POST["gender"]);
}




if (empty($_POST["phone"])) {
    $validation['phoneErr'] = "Name is required";
} else {
    $phone = test_input($_POST["phone"]);
    // check if phone only contains letters and whitespace
    if (!preg_match("/^\\+?[1-9][0-9]{7,14}$/", $phone)) {
        $validation['phoneErr'] = "Only letters and white space allowed";
    }
}



if (empty($_POST["city"])) {
    $validation['cityErr'] = "Gender is required";
} else {
    $city = test_input($_POST["city"]);
}




if (empty($_FILES["fileuploaded"]['name'])) {
    $validation['fileuploadedErr'] = "fileuploaded is required";
} else {
    if ($_FILES["fileuploaded"]['size'] < 10 * 1024 * 1024) {
        $filename =  $_FILES["fileuploaded"]['name'];
        $filepath = './Image/' . $filename;
        $tmpFile = $_FILES["fileuploaded"]['tmp_name'];
        move_uploaded_file($tmpFile, $filepath);
    } else {
        $validation['fileuploadedErr'] = "File too bigg!";
    }
}


if (empty($_POST["hobbies"])) {
    $validation['hobbiesErr'] = "hobbies is required";
} else {
    $hobbies = test_input(implode(',', $_POST["hobbies"]));
}




$sql = "INSERT INTO  studend_record(name , email , password , gender , phone , city , fileuploaded , hobbies)VALUES
  ('$name' , '$email' , '$password' , '$gender' , '$phone' , '$city' , '$filepath' , '$hobbies')";



if (count($validation) == 0) {
    mysqli_query($conn, $sql);
    header('location:fetch_data.php');
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
