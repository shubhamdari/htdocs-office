<?php
include 'connection.php';
// insert mulitple 



$sql = "INSERT INTO nametest(firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";


$sql = "INSERT INTO nametest(firstname, lastname, email)
VALUES ('shubham', 'Doe', 'john@example.com')";

$sql = "INSERT INTO nametest(firstname, lastname, email)
VALUES ('ajay', 'Doe4', 'ajay@example.com')";

if ($conn->query($sql) === true){
    echo "New records created successfully";
}else {
    echo "Error: " . $sql . "<br>";
}
  

mysqli_close($conn);

?>

















<!-- Good Evening  Sir , mam
Full time report :-
 Php: 



MySQL Database:
(a)connect.
(b)create db.
(c)insert data.
(d)insert multiple data.
(e)delete data   Execution is pending
(f)update data   Execution is pending -->