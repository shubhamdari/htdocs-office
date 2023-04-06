<?php
include 'config.php';


$name = $email = $password = $file_name  = $gender = $hobbbies = "";
$validation = [];

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
  $validation['passwordErr'] = "password is requried";
} else {
  $password = test_input($_POST["password"]);
}



if (empty($_FILES["file"]["name"])) {
  $validation['fileErr'] = "File is required";
} else {
  $ext = pathinfo($_FILES["file"]['name'], PATHINFO_EXTENSION);
  $file_name = time() . rand() . "." . $ext;
  $tmp_name = $_FILES["file"]['tmp_name'];
  move_uploaded_file($tmp_name, 'files/' . $file_name);
}



if (empty($_POST["gender"])) {
  $validation['genderErr'] = "Gender is required";
} else {
  $gender = test_input($_POST["gender"]);
}

if (empty($_POST["hobbies"])) {
  $validation['hobbiesErr'] = "Hobbies is required";
} else {
  $hobbies = test_input(implode(',', $_POST["hobbies"]));
}

$sql = "INSERT INTO `pagination_crud_prac`(name , email , password , File  , gender , hobbies)
  VALUES('$name' , '$email' , '$password' , '$file_name'  , '$gender' , '$hobbies')";

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
