<?php
// connection file
include "config.php";

// check conneciton
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $course = $_POST['course'];


// database insert query
    $sql = "INSERT INTO students(name , mobile , gender , email , course)VALUES('$name' , '$mobile' , '$gender' , '$email' , '$course')";


// check connection    
    if(mysqli_query($conn , $sql)){
       header("location: index.php");
    }else{
        echo "Error " . mysqli_error($conn);
    }
}

?>  