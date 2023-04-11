<?php

include 'config.php';

session_start();
// $id = $_GET['id'];
$id = $_SESSION['id'];
$sql = "SELECT * FROM login_register WHERE id = '$id'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
$hobbies = explode(',',$row['hobbies']);
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
    .error {
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
                            <h3 class="text-center text-success"><b>Update page</b></h3>

                            <div class="card-body">

                                <form action="edit_validation.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

                                    <div class="form-group my-3">
                                        <b> Name :</b><input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                                        <span class="error">
                                            <?php
                                            if (isset($validation['nameErr'])) {
                                                echo $validation['nameErr'];
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <div class="form-group my-3">
                                        <b> Email :</b><input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                                        <span class="error">
                                            <?php
                                            if (isset($validation['emailErr'])) {
                                                echo $validation['emailErr'];
                                            }
                                            ?>
                                        </span>
                                    </div>


                                    <div class="form-group my-3">
                                        <label for=""><b>Gender :</b></label>
                                        <br>
                                        <label for="Male"><b>Male :</b></label>
                                        <input type="radio" name="gender" id="Male" value="Male" <?php if($row['gender'] == 'Male'){echo 'checked';} ?>>
                                        <br>
                                        <label for="Female"><b>Female :</b></label>
                                        <input type="radio" name="gender" id="Female" value="Female"  <?php if($row['gender'] == 'Female'){echo 'checked';} ?>>
                                        <br>

                                        <span class="error">
                                            <?php
                                            if (isset($validation['genderErr'])) {
                                                echo $validation['genderErr'];
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <div class="form-group my-3">
                                        <label for="mobile"><b>Mobile :</b></label>
                                        <input type="number " name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
                                        <span class="error">
                                            <?php
                                            if (isset($validation['mobileErr'])) {
                                                echo $validation['mobileErr'];
                                            }
                                            ?>
                                        </span>
                                    </div>


                                    <div class="form-group my-3">
                                        <label for=""><b>File :</b></label>
                                        <input type="file" name="profile_photo" class="form-control">
                                        <img src="files/<?php echo $row['profile_photoErr'] ?>" width="100px" height="100px";>
                                        <input type="hidden" name="old_file" value="<?php echo $row['profile_photoErr'];  ?>">
                                        <span class="error">
                                            <?php
                                            if (isset($validation['profile_photoErr'])) {
                                                echo $validation['profile_photoErr'];
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <div class="form-group my-3">
                                        <label for=""><b>State :</b></label>
                                        <select name="state" class="btn btn-success">
                                            <option value="" >Select State</option>
                                            <option value="Mumbai" <?php if($row['state'] == 'Mumbai'){echo 'selected';}?>>Mumbai</option>
                                            <option value="Pune" <?php if($row['state'] == 'Pune'){echo 'selected';}?>>Pune</option>
                                            <option value="Delhi" <?php if($row['state'] == 'Delhi'){echo 'selected';}?>>Delhi</option>
                                            <option value="Goa" <?php if($row['state'] == 'Goa'){echo 'selected';}?>>Goa</option>
                                        </select>
                                        <br>

                                        <span class="error">
                                            <?php
                                            if (isset($validation['stateErr'])) {
                                                echo $validation['stateErr'];
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <div class="form-group my-3">
                                        <label for=""><b>Hobbies :</b></label>
                                        <br>
                                        <label for="Reading"><b>Reading :</b></label>
                                        <input type="checkbox" name="hobbies[]" id="Reading" value="Reading" <?php if(in_array('Reading',$hobbies)){echo 'checked';} ?>>
                                        <br>
                                        <label for="Coding"><b>Coding :</b></label>
                                        <input type="checkbox" name="hobbies[]" id="Coding" value="Coding"  <?php if(in_array('Coding',$hobbies)){echo 'checked';} ?>>
                                        <br>
                                        <label for="Playing"><b>Playing :</b></label>
                                        <input type="checkbox" name="hobbies[]" id="Playing" value="Playing"  <?php if(in_array('Playing',$hobbies)){echo 'checked';} ?>>
                                        <br>
                                        <span class="error">
                                            <?php
                                            if (isset($validation['hobbiesErr'])) {
                                                echo $validation['hobbiesErr'];
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <div class="form-group my-3">
                                        <label for=""><b>Address :</b></label>
                                        <textarea name="address" class="form-control" cols="10" rows="5"></textarea>
                                        <span class="error">
                                            <?php
                                            if (isset($validation['addressErr'])) {
                                                echo $validation['addressErr'];
                                            }
                                            ?>
                                        </span>
                                    </div>

                                    <div class="form-group my-3">
                                        <button name="submit" type="submit" class="btn btn-success w-100">Update</button>
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