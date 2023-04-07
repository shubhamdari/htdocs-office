<?php

include "config.php";
session_start();

if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
$sql ="SELECT  * FROM `login_history` WHERE user_id=$id limit 10";

}
else{
    header("location:login.php");
}
$result = mysqli_query($conn,$sql);








?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
   <title>user</title>
</head>

<body>


   <div class="container my-3">

      <div class="row">
         <div class="col">
            <div class="card">
               <div class="card-header">
                  <h3>user_page</h3>

                  <div class="div d-flex justify-content-end">

                  </div>

                  <div class="card-body my-3">

                     <div class="card">
                     <a href="update_profile.php?id=<?php echo $id;?>"><button class="btn btn-success ">Update Profile</button></a>
                     <table class="table stripped-hover">
                      
                     <thead>
                       <tr>
                       <th>#</th>
                       <th>Date</th>
                       <th>Time</th>
                       </tr>
                     </thead>

                     <?php if(mysqli_num_rows($result)>0) {?>

                     <?php 
                     $count=1;
                        while($row=mysqli_fetch_assoc($result)) {
                            ?>

                     <tbody>
                          
                     <tr>
                       <td><?php echo $count;?></td>
                       <td><?php echo $row['date']?></td>
                       <td><?php echo $row['time']?></td>
                       <td>

                        <!-- <a href="deleted_at.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a> -->
   

                       </td>
                      
                    
                       </tr>

                     </tbody>

                     <?php 
                    $count++;
                    }}?>


                     </table>

                      


                     </div>

                  </div>


               </div>
            </div>
         </div>
      </div>
   </div>


   <script src="./Bootstrap/bootstrap.bundle.js"></script>
</body>

</html>