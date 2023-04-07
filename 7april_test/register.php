<?php 

include "register_store.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
   <title>Register</title>
</head>

<body>


   <div class="container my-3">
      <div class="row">
         <div class="col">
            <div class="card">
               <div class="card-header">
                  <h3>Register_page</h3>
                  <div class="card-body my-3">

                     <div class="card">

                        <form action="" method="post">

                           <div class="form-group my-3">
                              Name :<input type="text" name="name" class="form-control">
                              <span>
                                 <?php
                                 if (!empty($validation['nameErr'])) {
                                    echo $validation['nameErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                              Email :<input type="text" name="email" class="form-control">
                              <span>
                                 <?php
                                 if (!empty($validation['emailErr'])) {
                                    echo $validation['emailErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                              Pass :<input type="text" name="pass" class="form-control">
                              <span>
                                 <?php
                                 if (!empty($validation['passErr'])) {
                                    echo $validation['passErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                              Confirm_Pass :<input type="text" name="cpass" class="form-control">
                              <span>
                                 <?php
                                 if (!empty($validation['cpassErr'])) {
                                    echo $validation['cpassErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                              <button name="submit" class="btn btn-success">Register</button>
                           </div>

                        </form>



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