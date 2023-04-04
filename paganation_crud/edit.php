<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php 
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM login_register_user_form WHERE id = $id";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
$hobbies = explode(',',$row['hobbies']);
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-center text-success">
                                <b>Register Form</b>
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="update.php?id=<?php $row['id']; ?>" method="post">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                                <br>

                                <label for=""><b>Email :</b></label>
                                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                                <br>

                                <label for=""><b>Password :</b></label>
                                <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male" <?php if($row['gender'] == 'Male'){echo 'checked';} ?>>
                                <br>
                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female" <?php if($row['gender'] == 'Female'){echo 'checked';} ?>>
                                <br>
                                <br>

                                <label for=""><b>File :</b></label>
                                <input type="file" name="file" class="form-control" value="<?php echo $row['name']; ?>">
                                <br>
                                
                                <label for=""><b>City :</b></label>
                                <select name="city" class="btn btn-success">
                                    <option value="" >Select City</option>
                                    <option value="Mumbai" <?php if($row['city'] == 'Mumbai'){echo 'selected';} ?>>Mumbai</option>
                                    <option value="Delhi" <?php if($row['city'] == 'Delhi'){echo 'selected';} ?>>Delhi</option>
                                    <option value="Goa" <?php if($row['city'] =='Goa'){echo 'selected';} ?>>Goa</option>
                                    <option value="Gujarat" <?php if($row['city'] == 'Gujarat'){echo 'selected';} ?>>Gujarat</option>
                                </select>
                                <br>
                                <br>


                                <label for=""><b>Hobbies :</b></label>
                                <br>
                                <label for="Reading Book"><b>Reading Book :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Reading Book" value="Reading Book" <?php if(in_array('Reading Book',$hobbies)){echo 'checked';} ?>>
                                <br>
                                <label for="Coding"><b>Coding :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Coding" value="Coding"  <?php if(in_array('Coding',$hobbies)){echo 'checked';} ?>>
                                <br>
                                <label for="Playing Game"><b>Playing Game :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Playing Game" value="Playing Game"  <?php if(in_array('Playing Game',$hobbies)){echo 'checked';} ?>>
                                <br>
                                <br>

                                <button type="submit" name="submit" class="btn btn-success w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>