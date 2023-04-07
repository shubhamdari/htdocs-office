<?php

include "config.php";
session_start();
if(isset($_POST['submit']))
{

    function input_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
           return $data; 
    }


  $validation = [];

 

  if(empty($_POST['email'])){
    $validation['emailErr'] = "Email is required";
  }else{
    $email = input_data($_POST['email']);
  }

  if(empty($_POST['pass'])){
    $validation['passErr'] = "Pass is required";
  } else{
    $pass = input_data($_POST['pass']);
  }

     if(count($validation)==0){

$sql = "SELECT * FROM `april_table1` WHERE email='$email' && pass='$pass'";
$result = mysqli_query($conn,$sql);

if($result->num_rows >0){
    $row = mysqli_fetch_assoc($result); 
    $_SESSION['id']=$row['id'];


if($row['role_id']==1){
    header("location:admin_dashboard.php");
die;
}else{
    $id = $row['id'];
    $date = date('d-m-Y');
    $time =  date('h:i:sa');
    $sql = "INSERT INTO `login_history`( `user_id`, `date`, `time`) VALUES ('$id','$date','$time') ";
    if(mysqli_query($conn,$sql)){

    header("location:user_dashboard.php");
    }
}

     }else{
        header("location:login.php");
     }

    }
}

?>