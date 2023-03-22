<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Student Form</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<?php
$filepath = "";
if(isset($_POST['submit'])){
    include 'store.php';
}else{
    $validation = [];
}
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-center text-success"><b>Student Form</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control" >
                                <span class="error">* <?php if(isset($validation['nameErr'])){echo $validation['nameErr'];} ?></span>
                                <br>

                                <label for=""><b>Email :</b></label>
                                <input type="email" name="email" class="form-control" >
                                <span class="error">* <?php if(isset($validation['emailErr'])){echo $validation['emailErr'];} ?></span>
                                <br>

                                <label for=""><b>Password :</b></label>
                                <input type="password" name="password" class="form-control" >
                                <span class="error">* <?php if(isset($validation['passwordErr'])){echo $validation['passwordErr'];} ?></span>
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male" >
                                <br>
                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female" >
                                <br>
                                <span class="error">* <?php if(isset($validation['genderErr'])){echo $validation['genderErr'];} ?></span>
                                <br>

                                <label for=""><b>Phone :</b></label>
                                <input type="number" name="phone" class="form-control" >
                                <span class="error">* <?php if(isset($validation['phoneErr'])){echo $validation['phoneErr'];} ?></span>
                                <br>

                                <label for=""><b>City :</b></label>
                                <br>
                                <select name="city" class="btn btn-success" >
                                    <option value="">Select City</option>
                                    <option value="delhi">Delhi</option>
                                    <option value="mumbai">Mumbai</option>
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                </select>
                                <br>
                                <span class="error">* <?php if(isset($validation['cityErr'])){echo $validation['cityErr'];} ?></span>
                                <br>
                                <br>


                                <label for=""><b>Image :</b></label>
                                <input type="file" name="fileuploaded" class="form-control" >
                                <span class="error">* <?php if(isset($validation['fileuploadedErr'])){echo $validation['fileuploadedErr'];} ?></span>
                                <br>
                                <br>


                                <label for=""><b>Hobbies :</b></label>
                                <br>
                                <label for="Reading Book"><b>Reading Book :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Reading Book" value="Reading Book" >
                                <label for="Coding"><b>Coding :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Coding" value="Coding" >
                                <label for="Playing Game"><b>Playing Game :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Playing Game" value="Playing Game" >
                                <br>
                                <span class="error">* <?php if(isset($validation['hobbiesErr'])){echo $validation['hobbiesErr'];} ?></span>
                                <br>
                                <br>

                                <button type="submit" class="btn btn-success w-100" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>