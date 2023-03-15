<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Employee Form</title>
    <style>
        button {
            width: 1140px;
        }

        .error {
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
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-center text-danger"><b>Employee Register From</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control">
                                <span class="error">* <?php if (isset($validation['nameErr'])) {
                                                            echo $validation['nameErr'];
                                                        } ?></span>
                                <br>

                                <label for=""><b>Date of Birth :</b></label>
                                <input type="date" name="birth" class="form-control">
                                <span class="error">* <?php if (isset($validation['birthErr'])) {
                                                            echo $validation['birthErr'];
                                                        } ?></span>
                                <br>

                                <label for=""><b>Email :</b></label>
                                <input type="text" name="email" class="form-control">
                                <span class="error">* <?php if (isset($validation['emailErr'])) {
                                                            echo $validation['emailErr'];
                                                        } ?></span>
                                <br>

                                <label for=""><b>Phone :</b></label>
                                <input type="number" name="phone" class="form-control">
                                <span class="error">* <?php if (isset($validation['phoneErr'])) {
                                                            echo $validation['phoneErr'];
                                                        } ?></span>
                                <br>

                                <label for=""><b>Password :</b></label>
                                <input type="password" name="password" class="form-control">
                                <span class="error">* <?php if (isset($validation['passwordErr'])) {
                                                            echo $validation['passwordErr'];
                                                        } ?></span>
                                <br>
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male">
                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female">
                                <br>
                                <span class="error">* <?php if (isset($validation['genderErr'])) {
                                                            echo $validation['genderErr'];
                                                        } ?></span>
                                <br>
                                <br>


                                <label for=""><b>File :</b></label>
                                <input type="file" name="file" class="form-control">
                                <span class="error">* <?php if (isset($validation['fileErr'])) {
                                                            echo $validation['fileErr'];
                                                        } ?></span>
                                <br>
                                <br>

                                <label for=""><b>City :</b></label>
                                <select name="city" class="btn btn-danger">
                                    <option value="">--Select City--</option>
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                </select>
                                <br>
                                <span class="error">* <?php if (isset($validation['cityErr'])) {
                                                            echo $validation['cityErr'];
                                                        } ?></span>
                                <br>
                                <br>


                                <label for=""><b>Hobbies :</b></label>
                                <br>
                                <label for="Reading"><b>Reading :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Reading" value="Reading">
                                <label for="Playing Game"><b>Playing Game :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Playing Game" value="Playing Game">
                                <label for="Travelling"><b>Travelling :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Travelling" value="Travelling">
                                <br>
                                <span class="error">* <?php if (isset($validation['hobbiesErr'])) {
                                                            echo $validation['hobbiesErr'];
                                                        } ?></span>
                                <br>
                                <br>
                                <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>