<?php
include 'config.php';


if (isset($_POST['submit'])) {
    $validation = [];

    // function test_input($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

    if (empty($_POST["name"])) {
        $validation['nameErr'] = "Name is required";
    } else {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["name"])) {
            $validation['nameErr'] = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $validation['emailErr'] = "Email is required";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $validation['emailErr'] = "Invalid email format";
        }
    }

    if (empty($_POST['gender'])) {
        $validation['genderErr'] = "gender is required";
    }

    if (empty($_POST['mobile'])) {
        $validation['mobileErr'] = "mobile is required";
    }

    if (empty($_FILES['profile_photo']['name'])) {
        $file_name = $_POST['old_file'];
        // $validation['porfile_photoErr'] = "porfile_photo is required";
    } else {
        $ext = pathinfo($_FILES['profile_photo']['name'], PATHINFO_EXTENSION);
        $file_name = time() . rand() . " . " . $ext;
        $tmp_name = $_FILES['profile_photo']['tmp_name'];
        move_uploaded_file($tmp_name, "files/" . $file_name);
    }

    if (empty($_POST['state'])) {
        $validation['stateErr'] = "state is required";
    }
    if (empty($_POST['hobbies'])) {
        $validation['hobbiesErr'] = "hobbies is required";
    }

    if (empty($_POST['address'])) {
        $validation['addressErr'] = "address is required";
    }
    if (count($validation) == 0) {

        $name = $_POST["name"];
        $id = $_POST['id'];
        $hobbies = implode(',', $_POST['hobbies']);
        $state = $_POST['state'];
        $mobile = $_POST['mobile'];
        $email = $_POST["email"];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        $sql = "UPDATE `login_register` SET `name`='$name',`email`='$email',`gender`='$gender',`mobile`='$mobile',
        `profile_photo`='$file_name',`state`='$state',`hobbies`='$hobbies',`address`='$address' WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header("location:user_dashborad.php");
    }
}
