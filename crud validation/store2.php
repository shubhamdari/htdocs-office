<?php
include "config.php";
$err = false;
$name = $email = $gender = $comment = $website = "";
// $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";

$validation = [];

if (empty($_POST["name"])) {
   $validation['nameErr'] = "Name is required";
    $err = true;
} else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $validation['nameErr'] = "Only letters and white space allowed";
        $err = true;
    }
}

if (empty($_POST["email"])) {
    $validation['emailErr'] = "Email is required";
    $err = true;
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $err = true;
    }
}

if (empty($_POST["website"])) {
    $website = "";
    $validation['websiteErr'] = "Website is required";
    $err = true;
} else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        $validation['websiteErr'] = "Invalid URL";
        $err = true;
    }
}

if (empty($_POST["comment"])) {
    $validation['commentErr'] = "comment is required";
} else {
    $comment = test_input($_POST["comment"]);
}

if (empty($_POST["gender"])) {
    $validation['genderErr'] = "Gender is required";
} else {
    $gender = test_input($_POST["gender"]);
}

$sql = "INSERT INTO `student_set`(`name`, `email`, `website`, `comment`, `gender`) 
  VALUES ('$name','$email','$website','$comment','$gender')";

if (!$err) {
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
?>