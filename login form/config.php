<?php
$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'login_register';

$conn = mysqli_connect($server , $user , $password , $dbname);

if(!$conn){
    die('Connection Failed' . mysqli_connect_error());
}
?>