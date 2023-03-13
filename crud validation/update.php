<?php
include "config.php";

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];


    $sql = "UPDATE `student_set` SET `name`='$name',`email`='$email'
    ,`website`='$website',`comment`='$comment',`gender`='$gender' WHERE id='$id'";

    if(mysqli_query($conn , $sql)){
        header("location:index.php");
        echo "Successfully Update";
    }else{
        echo "Error" . mysqli_error($conn);
    }
}
?>