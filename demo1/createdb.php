<?php 
include 'connection.php'; 
// Create database
$sql = "CREATE DATABASE test1";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "<br>Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>