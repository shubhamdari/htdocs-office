<?php
session_start();

$name = $email = $password = $gender = $mobile = $file_name = $state = $hobbies = $address = "";
$validation = [];

    if(isset($_POST['submit'])){
    if (empty($_POST["name"])) {
      $validation['nameErr'] = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
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


    if(empty($_POST['gender'])){
        $validation['genderErr'] = "gender is required";
    }
    else{
        $gender = test_input($_POST['gender']);
    }

    if(empty($_POST['mobile'])){
        $validation['mobileErr'] = "mobile is required";
    }
    else{
        $mobile = test_input($_POST['mobile']);
    }


    if(empty($_FILES['profile_photo']['name'])){
        $file_name = $old_file;
    }
    else{
        $ext = pathinfo($_FILES['profile_photo']['name'],PATHINFO_EXTENSION);
        $file_name = time() . rand() . " . " . $ext;
        $tmp_name = $_FILES['profile_photo']['tmp_name'];
        move_uploaded_file($tmp_name, "files/" . $file_name);
    }

    if(empty($_POST['state'])){
        $validation['stateErr'] = "state is required";
    }
    else{
        $state = test_input($_POST['state']);
    }

    if(empty($_POST['hobbies'])){
        $validation['hobbiesErr'] = "hobbies is required";
    }
    else{
        $hobbies = test_input(implode(',',$_POST['hobbies']));
    }

    if(empty($_POST['address'])){
        $validation['addressErr'] = "address is required";
    }
    else{
        $address = test_input($_POST['address']);
    }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $sql = "UPDATE `login_register` SET `name`='$name',`email`='$email',`gender`='$gender',`mobile`='$mobile',
    `profile_photo`='$file_name',`state`='$state',`hobbies`='$hobbies',`address`='$address' WHERE id = '$id'";
  
  
  
  if(count($validation) == 0){
   if( mysqli_query($conn , $sql)){
    // echo $sql;

    header("location:user_dashborad.php");
    }else{
        echo "Error" . mysqli_error($conn);
    }
  }
?>