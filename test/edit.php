<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Student Form</title>
</head>
<body>


<?php
            include "config.php";
            $id = $_GET['id'];
            

            $sql = "SELECT * FROM students  WHERE id = $id";
            $result = mysqli_query($conn , $sql);
            $row = mysqli_fetch_assoc($result);


?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h2 class="text-center"><b class="text-primary">UPDATE INFORMATION</b></h2>
                        </div>
                        <div class="card-body">
                            <form action="update.php?id=<?php echo $row['id'];?>" method="post">


                                <label><b>Name :</b></label>
                                <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
                                <br>

                                <label><b>Mobile :</b></label>
                                <input type="tel" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control">
                                <br>

                                <label><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male" <?php  if($row['gender'] == 'Male') {echo "checked";}?>>

                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female" <?php  if($row['gender'] == 'Female') {echo "checked";}?>>
                                <br>
                                 <br>       
                                <label><b>Email :</b></label>
                                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                                <br>
                            

                                <label><B>Choose Your Course :</b></label>
                                <select name="course" value="<?php echo $row['course']; ?>" class="btn btn-primary"><b>Selected Course</b>
                                    <option value="BBA"<?php if($row['course'] == 'BBA') {echo "selected";}?>>BBA</option>
                                    <option value="BMS"<?php if($row['course'] == 'BMS') {echo "selected";}?>>BMS</option>
                                    <option value="BFA" <?php if($row['course'] == 'BFA') {echo "selected";}?>>BFA</option>
                                    <option value="BCA" <?php if($row['course'] == 'BCA') {echo "selected";}?>>BCA</option>
                                    <option value="BSW" <?php if($row['course'] == 'BSW') {echo "selected";}?>>BSW</option>
                                    <option value="BFD" <?php if($row['course'] == 'BFD') {echo "selected";}?>>BFD</option>
                                </select>
                                <bR>
                                <bR>
                            
                                <button name="update" class="btn btn-primary w-100">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>