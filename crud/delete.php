<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM `user` WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("location: admin.php");
    echo "Successfully Delete";
} else {
    echo "error" . mysqli_error($conn);
}
