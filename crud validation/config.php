<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "student_news";

$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
} else {
    // echo "Connection Successfully";
}
?>