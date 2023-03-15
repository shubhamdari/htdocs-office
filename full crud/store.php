<?php
include 'config.php';


$name = $birth = $email = $phone = $password = $gender = $filename = $city = $hobbies = "";


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

if (empty($_POST["birth"])) {
    $validation['birthErr'] = "Birth date is required";
} else {
    $birth = test_input($_POST["birth"]);
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


if (empty($_POST["phone"])) {
    $validation['phoneErr'] = "phone is required";
} else {
    $phone = test_input($_POST["phone"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^\\+?[1-9][0-9]{7,14}$/", $phone)) {
        $validation['phoneErr'] = "Invalid phone number";

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


if (empty($_FILES["file"]['name'])) {
    $validation['fileErr'] = "file is required";
} else{
    // $file = move_uploaded_file($_FILES['file']['tmp_name'],'./image');
    // $filename = './image';   
}



if (empty($_POST["city"])) {
    $validation['cityErr'] = "city is required";
} else {
    $city = test_input($_POST["city"]);
}



if (empty($_POST["hobbies"])) {
    $validation['hobbiesErr'] = "hobbies is required";
} else {
    $hobbies = test_input(implode(',', $_POST["hobbies"]));
}






$sql = "INSERT INTO employe_regsitration_form(name , birth , email , phone , password , gender , file , city , hobbies)VALUES
  ('$name' , '$birth' , '$email' , '$phone' , '$password' , '$gender' , '$filename' , '$city' , '$hobbies')";

if (count($validation) == 0) {
    if(mysqli_query($conn, $sql)){   
        header('location:index.php');
    // echo "insert data into database";
    }else{
        echo mysqli_error($conn);
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>