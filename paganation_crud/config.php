<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "login_user_form";

$conn = mysqli_connect($server , $user , $password , $dbname);

if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
?>