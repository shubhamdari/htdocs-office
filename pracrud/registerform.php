<?php
    include "config.php";
?>

<?php
if(isset($_POST["sub"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $mobile = $_POST["mobile"];
    $address1 = $_POST["address1"];
    $city = $_POST["city"];
    $pin = $_POST["pin"];
        

    $sql = "INSERT INTO from (id, fname, lname, email, pass, mobile, address1, city, pin) 
    VALUES ('$fname','$lname','$email','$pass','$mobile','$address1','$city','$pin')";
    

    if($conn->query($sql) === true){
        echo "Date insert to database";
    }else{
        echo "Error : " . $sql . "<br>" . $conn->error; 
    }


    $conn->close();
}
?>




Good Evening  Sir , mam
Full time report :-

php
1. crud operations
(a)connect.
(b)create db.
(c)insert data.
2.Working on crud_operations