<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "pagination_crud";

$conn = mysqli_connect($server , $user , $password , $dbname);

if(!$conn){
    die("Connection falied" . mysqli_connect_error());
}
?>