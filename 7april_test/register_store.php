<?php

include "config.php";

if(isset($_POST['submit']))
{

    function input_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
           return $data; 
    }


  $validation = [];

  // validation

  if(empty($_POST['name'])){
    $validation['nameErr'] = "Name is required";
  }else{
    $name = input_data($_POST['name']);
  }

  if(empty($_POST['email'])){
    $validation['emailErr'] = "Email is required";
  }else{
    $email = input_data($_POST['email']);
  }

  if(empty($_POST['pass'])){
    $validation['passErr'] = "Pass is required";
  }elseif($_POST['pass']!=  $_POST['cpass']){
    $validation['passErr'] = "pass not match";

    }  else{
    $pass = input_data($_POST['pass']);
  }

     if(count($validation)==0){


 // insert data     

$sql = "INSERT INTO `april_table1`( `name`, `email`, `pass`) VALUES ('$name','$email','$pass')";
$result = mysqli_query($conn,$sql);

if($result){
   header("location:login.php");
}else{
    echo "error";
}

     }

}

?>