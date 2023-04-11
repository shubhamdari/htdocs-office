<?php 

if(isset($_POST['submit'])){
   include 'login_checked.php';
}else{
   $validation = [];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Register</title>
</head>
<style>
   .error{
      color: red;
   }
</style>
<body>


   <div class="container my-3">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title my-3">
                     <h3 class="text-center text-success"><b>Login page</b></h3>

                     <div class="card-body">

                        <form action="" method="post">

                           <div class="form-group my-3">
                           <div class="form-group my-3">
                           <b> Email :</b><input type="email" name="email" class="form-control">
                              <span class="error">
                                 <?php
                                 if (isset($validation['emailErr'])) {
                                    echo $validation['emailErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                           <b>  Password :</b><input type="password" name="password" class="form-control">
                              <span class="error">
                                 <?php
                                 if (isset($validation['passwordErr'])) {
                                    echo $validation['passwordErr'];
                                 }
                                 ?>
                              </span>
                                </div>
                           <div class="form-group my-3">
                              <button name="submit" type="submit" class="btn btn-success w-100">Register</button>
                           </div>
                        </form>
                        
                        
                    </div>
                    
                </div>
                
                
            </div>
        </div>
    </div>
</div>
</div>
<a href="create.php" class="btn btn-success">Register</a>


   <script src="./Bootstrap/bootstrap.bundle.js"></script>
</body>

</html>