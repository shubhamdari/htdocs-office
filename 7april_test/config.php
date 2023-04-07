<?php 

// conection
$conn = mysqli_connect('localhost','root','','april');

if(!$conn){
    die("conn falide".mysqli_connect_error());
}

?>