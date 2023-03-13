<?php
include "config.php";

$name = "";
$age = "";
$salary = "";
$desgination = "";
$email = "";
$hobbies = "";
$shift = "";

if (isset($_POST['submit'])) {
   $ok = true;

   if (!isset($_POST['name']) or $_POST['name']  == "") {
      $ok = false;
   } else {
      $name = $_POST['name'];
   }

   if (!isset($_POST['age']) or $_POST['age']  == "") {
      $ok = false;
   } else {
      $age = $_POST['age'];
   }

   if (!isset($_POST['salary']) or $_POST['salary'] == "") {
      $ok = false;
   } else {
      $salary = $_POST['salary'];
   }

   if (!isset($_POST['desgination']) or $_POST['desgination'] == "") {
      $ok = false;
   } else {
      $desgination = $_POST['desgination'];
   }

   if (!isset($_POST['email']) or $_POST['email'] == "") {
      $ok = false;
   } else {
      $email = $_POST['email'];
   }

   if (!isset($_POST['hobbies']) or $_POST['hobbies'] == "") {
      $ok = false;
   } else {
      $hobbies = $_POST['hobbies'];
   }

   if (!isset($_POST['shift']) or $_POST['shift'] == "") {
      $ok = false;
   } else {
      $shift = $_POST['shift'];
   }

   if (!$ok) {
      header("location: create.php");
    }  else {

      $sql = "INSERT INTO employe_regsitration(name , age , salary , desgination , email , hobbies , shift)
    VALUES('$name' , '$age' , '$salary' , '$desgination' , '$email' , '$hobbies' , '$shift')";

      if (mysqli_query($conn, $sql)) {
         header("location: index.php");
         echo "Insert data into database";
      } else {
         header("location: create.php");
         echo "Error" . mysqli_error($conn);
      }
   }
}
