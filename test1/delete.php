<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM `studend_record` WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    header('location:fetch_data.php');
} else {
    echo 'Error' . mysqli_connect_error();
}
?>