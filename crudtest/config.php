<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employe";
$conn = mysqli_connect($servername , $username , $password , $dbname);
if(!$conn){
    die("Connection Falied" . mysqli_connect_error($conn));
}
?>