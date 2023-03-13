<?php
// mysqli_report(MYSQLI_REPORT_ERROR);

try {
    $conn = new mysqli('localhost', 'root', '', 'student_register');
} catch (Exception $err) {
    echo 'Connection Failed' . $err->getMessage();
}
