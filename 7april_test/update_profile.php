<?php

include "config.php";
$id=$_GET['id'];

if(isset($_POST['update']))
{
//     print_r($_POST['update']);
//    die;
    function input_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
           return $data; 
    }


  $validation = [];


  // name validation
  if(empty($_POST['name'])){
    $validation['nameErr'] = "Name is required";
  }else{
    $name = input_data($_POST['name']);
  }

 // email validation
  if(empty($_POST['email'])){
    $validation['emailErr'] = "Email is required";
  }else{
    $email = input_data($_POST['email']);
  }

 // pass validation
  if(empty($_POST['pass'])){
    $validation['passErr'] = "Pass is required";
  }
  else{
    $pass = input_data($_POST['pass']);
  }

 // gender validation
  if(empty($_POST['gender'])){
    $validation['genderErr'] = "gender is required";
  }
  else{
    $gender = ($_POST['gender']);
  }

 // mobile validation
  if(empty($_POST['mobile'])){
    $validation['mobileErr'] = "Mobile is required";
  }
  else{
    $mobile = input_data($_POST['mobile']);
  }

 // file validation
$filename = $_FILES['file']['name'];

if(empty($filename)){
$filename = $_POST['old_file'];
}

$destination = 'image/'.$filename;
$extension = pathinfo($filename,PATHINFO_EXTENSION);

$temp_name = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];

if(empty($filename)){
    $validation['fileErr'] = "File is required";
}

// !empty($filename &&
elseif(!in_array($extension,['png','jpg','jpeg'])){
    $validation['fileErr'] = "File is does not match";

}elseif($size>5000000){
    $validation['fileErr'] = "File is too large";
}else{
    move_uploaded_file($temp_name,$destination);
}


  // state validation
  if(empty($_POST['state'])){
    $validation['stateErr'] = "State is required";
  }
  else{
    $state = input_data($_POST['state']);
  }


 // address validation
  if(empty($_POST['hobbies'])){
    $validation['hobbiesErr'] = "Hobbies is required";
  }
  else{
    $hobbies = implode(',',$_POST['hobbies']);
  }


  if(empty($_POST['address'])){
    $validation['addressErr'] = "Address is required";
  }
  else{
    $address = ($_POST['address']);
  }









     if(count($validation)==0){


// update query        

$sql = "UPDATE `april_table1` SET `name`='$name',`email`='$email',`pass`='$pass',`gender`='$gender',`mobile`='$mobile',`file`='$filename',
`state`='$state',`hobbies`='$hobbies',`address`='$address' WHERE id=$id";
$result = mysqli_query($conn,$sql);

if($result){
   header("location:admin_dashboard.php");
}else{
    echo "Updation error";
}

     }

}

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

   <?php
   $sql = "SELECT  * FROM `april_table1` WHERE id=$id ";
   $result =mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);

//    $hobbies = $row['hobbies'];
//    $hobbies1 = explode(',',$hobbies);


   ?>
      <div class="row">
         <div class="col">
            <div class="card">
               <div class="card-header">
                  <h3>Edit_page</h3>
                  <div class="card-body my-3">

                     <div class="card">

                        <form action="" method="post" enctype="multipart/form-data">

                           <div class="form-group my-3">
                              Name :<input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
                              <span>
                                 <?php
                                 if (!empty($validation['nameErr'])) {
                                    echo $validation['nameErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                              Email :<input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                              <span>
                                 <?php
                                 if (!empty($validation['emailErr'])) {
                                    echo $validation['emailErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                              Pass :<input type="text" name="pass" class="form-control" value="<?php echo $row['pass'] ?>">
                              <span>
                                 <?php
                                 if (!empty($validation['passErr'])) {
                                    echo $validation['passErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                              Gender : <input type="radio" name="gender" value="male" id="male_id" <?php echo($row['gender']=='male')?'checked':'' ?>>
                              <label for="male_id">Male</label>
                              <input type="radio" name="gender" value="female" id="female_id" <?php echo($row['gender']=='female')?'checked':'' ?>>
                              <label for="female_id">Female</label>
                           
                              <span>
                                 <?php
                                 if (!empty($validation['genderErr'])) {
                                    echo $validation['genderErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                              Mobile :<input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile'] ?>">
                              <span>
                                 <?php
                                 if (!empty($validation['mobileErr'])) {
                                    echo $validation['mobileErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-3">
                              Profile Photo :<input type="file" name="file" class="form-control">
                                 <input type="hidden" name="old_file" <?php $row['file'] ?>>
                                 <img src="image/<?php $row['file'] ?>" height="40px" width="50px">
                              <span>
                                 <?php
                                 if (!empty($validation['fileErr'])) {
                                    echo $validation['fileErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-4">
                             <select name="state" id="" class="form-select">
                                  <option value="">State</option>
                                  <option value="MP" <?php echo($row['state']=='MP')?'selected':'' ?> >MP</option>
                                  <option value="HP" <?php echo($row['state']=='HP')?'selected':'' ?> >HP</option>
                                  <option value="HR" <?php echo($row['state']=='HR')?'selected':'' ?> >HR</option>
                             </select>
                              <span>
                                 <?php
                                 if (!empty($validation['stateErr'])) {
                                    echo $validation['stateErr'];
                                 }
                                 ?>
                              </span>
                           </div>

                           <div class="form-group my-4">

                            <label for="">Hobbies:</label>
                            <input type="checkbox" class="form-check-input" name="hobbies[]" id="check1" value="Tennis"\

                            <?php

                            //   if(in_array('Tennis',$hobbies1)){
                            //     echo "checked";
                            //   }
                        
                            echo($row['hobbies']=='Tennis')?'checked':''
                            ?>
                            >
                            <label for="check1">Tennis</label>



                            <input type="checkbox" class="form-check-input" name="hobbies[]" id="check2" value="Cricket"
                            <?php
                              
                            //   if(in_array('Cricket',$hobbies1)){
                            //     echo "checked";
                            //   }

                            echo($row['hobbies']=='Cricket')?'checked':''
    

                            
                            ?>
                            >
                            <label for="check2">Cricket</label>





                            <input type="checkbox" class="form-check-input" name="hobbies[]" id="check3" value="Baseball"
                            <?php
                              
                            //   if(in_array('Baseball',$hobbies1)){
                            //     echo "checked";
                            //   }
   
                            echo($row['hobbies']=='Baseball')?'checked':''
                            
                            ?>
                            
                            >
                            <label for="check3">Baseball</label>
                           
                              <span>
                                 <?php

                                 if (!empty($validation['hobbiesErr'])) {
                                    echo $validation['hobbiesErr'];
                                 }


                                 ?>
                              </span>
                           </div>


                           <div class="form-group my-4">
                           <label for="">Address:</label>
                           <br>
                           <textarea name="address" id="" cols="80" rows="5" value="<?php echo $row['address'] ?>"></textarea>
                           <br>
                              <span>
                                 <?php
                                 if (!empty($validation['addressErr'])) {
                                    echo $validation['addressErr'];
                                 }
                                 ?>
                              </span>
                           </div>
                          

                           <div class="form-group my-4">
                              <button name="update" class="btn btn-success">Update</button>
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



<!-- Estimate Time :- 10:55AM To 5 :00 PM
For shubham , himanshu , shivang 

 First read carefully, then start the test  

Create Login Register page 
-  Two types of users (admin , normal user)

-Registration page fields
- name , email , password , confirm password

User dashboard page 

After succuessfully registration  and login user redirect on user dashboard page and see previous 10 login history (date time)
user can update own profile 

Profile page fields

name :- auto filled 
email :- auto filed
gender 
mobile number
profile photo 
state  - dropdown
hobbies :- checkbox
address :- textarea


Admin Dashboard page 

-admin can see all normal users list (expect admin user) 
- admin can do delete , restore , permanent delete (If admin deletes a user then his profile photo should also be deleted from the folder)
- searching ,pagination in list page 

Important points (don't ignore it) :- 

- File name must be correct
- use successfully and error message
- user proper buttons text
- user commenting 
- manage urls 
- use validations
- Just make two tables (login_histories and users table)


Your test report does not depend only on task completed, it also depends on your knowledge -->