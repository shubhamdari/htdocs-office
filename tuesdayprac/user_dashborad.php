<?php
include "config.php";
session_start();
$id = $_SESSION['id'];
$sql ="SELECT * FROM `login_history`  WHERE user_id = '$id'";
$result = mysqli_query($conn , $sql);
// echo mysqli_error($conn);
// print_r($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User_Histore</title>
</head>

<body>
    <a href="update_profile.php" class="btn btn-success"><button class="btn btn-success">Update Profile</button></a>
    <table class="table table-hover table-bordered">
        <tr>
            <th><b>Sr No </b></th>
            <th><b>Date </b></th>
            <th><b>Time </b></th>
            <th><b>user id </b></th>

        </tr>
        <?php
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){        
                    // print_r($row);
                    
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['user_id']; ?></td>
        </tr>
        <?php }} ?>
    </table>
</body>

</html>