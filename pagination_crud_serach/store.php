<?php
include 'config.php';


$name = $email = $password = $gender = $filename =  $hobbies = "";
$validation = [];

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
    $validation['passwordErr'] = "Password is required";
} else {
    $password = test_input($_POST["password"]);
}


if (empty($_POST["gender"])) {
    $validation['genderErr'] = "Gender is required";
} else {
    $gender = test_input($_POST["gender"]);
}



if (empty($_FILES["file"]["name"])) {
    $validation['fileErr'] = "File is required";
} else {
    $file = $_FILES['file'];
    $filesize = filesize($file['tmp_name']);
    $filename = "./files/" . $file['name'];
    move_uploaded_file($file['tmp_name'], $filename);
}





if (empty($_POST["hobbies"])) {
    $validation['hobbiesErr']  = "hoobies is required";
} else {
    $hobbies = test_input(implode(',', $_POST["hobbies"]));
}

$sql = "INSERT INTO pagination_crud_form(name, email, password, gender, file, hobbies)
  VALUES('$name', '$email', '$password', '$gender', '$filename', '$hobbies')";


if (count($validation) == 0) {
    mysqli_query($conn, $sql);
    header("location:index.php");
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
