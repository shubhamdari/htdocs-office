<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Employee Update Form</title>
</head>

<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM employe_regsitration_form WHERE id = '$id'";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);

    $hobbies = explode(',', $row['hobbies']);
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-center text-danger"><b>Employee Register Update From</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="update.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                                <br>

                                <label for=""><b>Date of Birth :</b></label>
                                <input type="date" name="birth" class="form-control" value="<?php echo $row['birth']; ?>">
                                <br>

                                <label for=""><b>Email :</b></label>
                                <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                                <br>

                                <label for=""><b>Phone :</b></label>
                                <input type="number" name="phone" class="form-control" value="<?php echo $row['phone']; ?>">
                                <br>

                                <label for=""><b>Password :</b></label>
                                <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>"> 
                                <br>
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male" <?php if($row['gender'] == 'Male'){echo "checked";} ?>>
                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female" <?php if($row['gender'] == 'Female'){echo "checked";} ?>>
                                <br>
                                <br>


                                <label for=""><b>File :</b></label>
                                <input type="file" name="file" class="form-control" value="<?php echo $row['file']; ?>"> 
                                <br>
                                <br>

                                <label for=""><b>City :</b></label>
                                <select name="city" class="btn btn-danger">
                                    <option value="">--Select City--</option>
                                    <option value="Bangalore" <?php if($row['city'] == 'Bangalore'){echo 'selected';} ?>>Bangalore</option>
                                    <option value="Mumbai" <?php if($row['city'] == 'Mumbai'){echo 'selected';} ?>>Mumbai</option>
                                    <option value="Chandigarh" <?php if($row['city'] == 'Chandigarh'){echo 'selected';} ?>>Chandigarh</option>
                                    <option value="Delhi" <?php if($row['city'] == 'Delhi'){echo 'selected';} ?>>Delhi</option>
                                    <option value="Hyderabad" <?php if($row['city'] == 'Hyderabad'){echo 'selected';} ?>>Hyderabad</option>
                                </select>
                                <br>
                                <br>


                                <label for=""><b>Hobbies :</b></label>
                                <br>
                                <label for="Reading"><b>Reading :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Reading" value="Reading" <?php if(in_array('Reading', $hobbies)){echo 'checked';} ?>>
                                <label for="Playing Game"><b>Playing Game :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Playing Game" value="Playing Game" <?php  if(in_array('Playing Game', $hobbies)){echo 'checked';} ?>>
                                <label for="Travelling"><b>Travelling :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Travelling" value="Travelling" <?php  if(in_array('Travelling', $hobbies)){echo 'checked';}?>>
                                <br>
                                <br>
                                <button type="submit" name="submit" class="btn btn-danger">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>