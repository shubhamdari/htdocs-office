<?php
include 'config.php';
$id = $_GET['id'];
$sql = "UPDATE `pagination_crud_form` SET `deleted_at`='0' WHERE id = `$id`";

if (mysqli_query($conn, $sql)) {
    header("location:restore1.php");
} else {
    echo "Error" . mysqli_connect_error();
}
