<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $old_file = $_POST['old_file'];

    if (empty($_FILES["file"]["name"])) {
        $file_name = $old_file;
    } else {
        $ext = pathinfo($_FILES["file"]['name'], PATHINFO_EXTENSION);
        $file_name = time() . rand() . "." . $ext;
        $tmp_name = $_FILES["file"]['tmp_name'];
        move_uploaded_file($tmp_name, 'files/' . $file_name);
    }

    $gender = $_POST['gender'];
    $hobbies = implode(',', $_POST['hobbies']);

    $sql = "UPDATE `pagination_crud_prac` SET `name`='$name',`email`='$email',`password`='$password'
    ,`file`='$file_name',`gender`='$gender',`hobbies`='$hobbies' WHERE id = $id";


    if (mysqli_query($conn, $sql)) {
        header("location:index.php");
    }
}
