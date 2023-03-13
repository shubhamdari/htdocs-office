<?php

// ways to connect to a MYSQL Database
// 1.MySQLi extension_loaded
// 2.PDO

$servername = "localhost";
$username = "root";
$password = "" ;
 
// create a connection 
$conn = mysqli_connect($servername,$username ,$password);

  
// die if connection was not successful
if(!$conn){
    die("sorry we failed to connect :" .mysqli_connect_error() );
}
else{
    echo "Connection was successful ";
}



?>