<?php
$server = "localhost";
$user = "root";
$password = "";

$conn = mysqli_connect($server , $user , $password);

if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}else{
    echo "Successfully";
}

?>