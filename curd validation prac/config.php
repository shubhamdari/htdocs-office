<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "student_login";

$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
} 
?>