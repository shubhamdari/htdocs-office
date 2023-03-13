<?php 
// server connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_student";

// database connection
$conn = mysqli_connect($servername , $username , $password , $dbname);

// check connection
// if(!$conn){
//     die("COnnection Failed " . mysqli_error());
// }else{
//     echo "Successfully";
// }


?>