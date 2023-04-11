<?php
include 'config.php';
$name = $email = $password = "";
$validation = [];

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

    if(empty($_POST['password'])){
        $validation['passwordErr'] = "Password is required";
    }elseif($_POST['password'] != $_POST['confirm_password']){
        $validation['passwordErr'] = "Confirm Password no match";
    }
    else{
        $password = md5(test_input($_POST['password']));
    }



    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $sql = "INSERT INTO `login_register` (name , email , password)VALUES('$name' , '$email' , '$password')";
  


    if(count($validation) == 0){
    mysqli_query($conn , $sql);
    header("location:login.php");
    }

?>