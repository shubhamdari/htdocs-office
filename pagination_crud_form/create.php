<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .error{
        color: red;
    }
</style>
<?php
if (isset($_POST['submit'])) {
    include 'store.php';
} else {
    $validation = [];
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-title">
                        <h1 class="text-center text-info"><B>Student Form</B></h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for=""><b>Name :</b></label>
                            <input type="text" name="name" class="form-control">
                            <span class="error"><?php if (isset($validation['nameErr'])) {
                                                    echo $validation['nameErr'];
                                                } ?></span>
                            <br>


                            <label for=""><b>Email :</b></label>
                            <input type="email" name="email" class="form-control">
                            <span class="error"><?php if (isset($validation['emailErr'])) {
                                                    echo $validation['emailErr'];
                                                } ?></span>
                            <br>



                            <label for=""><b>Password :</b></label>
                            <input type="password" name="password" class="form-control">
                            <span class="error"><?php if (isset($validation['passwordErr'])) {
                                                    echo $validation['passwordErr'];
                                                } ?></span>
                            <br>



                            <label for=""><b>File :</b></label>
                            <input type="file" name="file" class="form-control">
                            <span class="error"><?php if (isset($validation['fileErr'])) {
                                                    echo $validation['fileErr'];
                                                } ?></span>
                            <br>



                            <label for=""><b>Gender :</b></label>
                            <br>
                            <label for="Male"><b>Male :</b></label>
                            <input type="radio" name="gender" id="Male" value="Male">
                            <br>
                            <label for="Female"><b>Female :</b></label>
                            <input type="radio" name="gender" id="Female" value="Female">
                            <br>
                            <span class="error"><?php if (isset($validation['genderErr'])) {
                                                    echo $validation['genderErr'];
                                                } ?></span>
                            <br>



                            <label for=""><b>Hobbies :</b></label>
                            <br>
                            <label for="Reading Book"><b>Reading Book :</b></label>
                            <input type="checkbox" name="hobbies[]" id="Reading Book" value="Reading Book">
                            <br>
                            <label for="Coding"><b>Coding :</b></label>
                            <input type="checkbox" name="hobbies[]" id="Coding" value="Coding">
                            <br>
                            <label for="Playing Game"><b>Playing Game :</b></label>
                            <input type="checkbox" name="hobbies[]" id="Playing Game" value="Playing Game">
                            <br>
                            <span class="error"><?php if (isset($validation['hobbiesErr'])) {
                                                    echo $validation['hobbiesErr'];
                                                } ?></span>
                            <br>

                            <button type="submit" name="submit" class="btn btn-info w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>