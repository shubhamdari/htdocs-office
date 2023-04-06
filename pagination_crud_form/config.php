<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "paination_student_login";

$conn = mysqli_connect($server , $user , $password , $dbname);

if(!$conn){
    die("Coonection Failed" . mysqli_connect_error());
}
?>