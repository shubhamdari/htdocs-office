<?php
include 'config.php';


// define variables and set to empty values
$name = $password = $email = $phone = $course =  $city = $gender = $filename = "";
$Err = False;
$validation = [];


if (empty($_POST["name"])) {
    $validation['nameErr'] = "Name is required";
    $Err = true;
} else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $validation['nameErr'] = "Only letters and white space allowed";
        $Err = true;
    }
}


if (empty($_POST["password"])) {
    $Err = true;
    $validation['passwordErr'] = "Password is required";
} else {
    $password = test_input($_POST["password"]);
}


if (empty($_POST["email"])) {
    $validation['emailErr'] = "Email is required";
    $Err = true;
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation['emailErr'] = "Invalid email format";
        $Err = true;
    }
}


if (empty($_POST["phone"])) {
    $validation['phoneErr'] = "Phone is required";
    $Err = true;
} else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^\\+?[1-9][0-9]{7,14}$/", $phone)) {
        $validation['phoneErr'] = "Invalid phone number";
        $Err = true;
    }
}


if (empty($_POST["course"])) {
    $Err = true;
    $validation['courseErr'] = "Course is required";
} else {
    $course = test_input(implode(',',$_POST["course"]));
}



if (empty($_POST["city"])) {
    $Err = true;
    $validation['cityErr'] = "City is required";
} else {
    $city = test_input($_POST["city"]);
}


if (empty($_POST["gender"])) {
    $Err = true;
    $validation['genderErr'] = "Gender is required";
} else {
    $gender = test_input($_POST["gender"]);
}


if (empty($_FILES["file"]['name'])) {
    $Err = true;
    $validation['fileErr'] = "file is required";
} else {
    $file = $_FILES["file"];
    $filesize = filesize($file['tmp_name']) / 1024;
    if ($filesize >= 100) {
        $Err = true;
        $validation['fileErr'] = "File must be less than 100kb";
    }
    $filename = "./files/" . $file['name'];
    move_uploaded_file($file["tmp_name"], $filename);
}

$sql = "INSERT INTO student_register_from(name , password , email , phone , course ,  city , gender , file)
  VALUES('$name' , '$password' , '$email' , '$phone' , '$course' ,  '$city' , '$gender' , '$filename')";

if (!$Err) {
    mysqli_query($conn, $sql);
    header('location:index.php');
}



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
