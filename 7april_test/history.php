<?php

include "config.php";

$sql ="SELECT  * FROM `login_history` WHERE  ";

$result = mysqli_query($conn,$sql);







?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
   <title>Admin</title>
</head>

<body>


   <div class="container my-3">

      <div class="row">
         <div class="col">
            <div class="card">
               <div class="card-header">
                  <h3>History_page</h3>
                  <div class="card-body my-3">

                     <div class="card">

                     <table class="table stripped-hover">
                      
                     <thead>
                       <tr>
                       <th>Id</th>
                        <th>User_id</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Action</th>
                       </tr>
                     </thead>

                     <?php if(mysqli_num_rows($result)>0) {?>
                     <?php while($row=mysqli_fetch_assoc($result)) {?>

                     <tbody>
                          
                     <tr>
                       <td><?php echo $row['id']?></td>
                       <td><?php echo $row['user_id']?></td>
                       <td><?php echo $row['time']?></td>
                       <td><?php echo $row['date']?></td>
                      
                       <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>"><button class="btn btn-success">Edit</button></a>
                        <a href="deleted_at.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a>
                       </td>
                      
                    
                       </tr>

                     </tbody>

                     <?php }}?>


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