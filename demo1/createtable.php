<?php
include 'connection.php';
// sql to create table
$sql = "CREATE TABLE nametest(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
)";

$conn->query($sql);
?>