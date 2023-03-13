<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";


// Database Connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed : " . mysqli_connect_erro());
}else{
    echo "Connected successfully";
}
?>