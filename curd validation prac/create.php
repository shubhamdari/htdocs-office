<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Student Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
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
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-success"><b>Student Form</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control">
                                <span class="error">* <?php if (isset($validation['nameErr'])) {
                                                            echo $validation['nameErr'];
                                                        } ?></span>
                                <br>

                                <label for=""><b>Password :</b></label>
                                <input type="password" name="password" class="form-control">
                                <span class="error">* <?php if (isset($validation['passwordErr'])) {
                                                            echo $validation['passwordErr'];
                                                        } ?></span>
                                <br>

                                <label for=""><b>E-mail :</b></label>
                                <input type="email" name="email" class="form-control">
                                <span class="error">* <?php if (isset($validation['emailErr'])) {
                                                            echo $validation['emailErr'];
                                                        } ?></span>
                                <br>


                                <label for=""><b>Phone :</b></label>
                                <input type="text" name="phone" class="form-control">
                                <span class="error">* <?php if (isset($validation['phoneErr'])) {
                                                            echo $validation['phoneErr'];
                                                        } ?></span>
                                <br>



                                <label for=""><b>Course :</b></label>
                                <br>
                                <label for="HTML">HTML :</label>
                                <input type="checkbox" name="course[]" id="HTML" value="HTMl">
                                <br>
                                <label for="CSS">CSS :</label>
                                <input type="checkbox" name="course[]" id="CSS" value="CSS">
                                <br>
                                <label for="PHP">PHP :</label>
                                <input type="checkbox" name="course[]" id="PHP" value="PHP">
                                <br>
                                <label for="JAVA">JAVA :</label>
                                <input type="checkbox" name="course[]" id="JAVA" value="JAVA">
                                <br>
                                <span class="error">* <?php if (isset($validation['courseErr'])) {
                                                            echo $validation['courseErr'];
                                                        } ?></span>
                                <br>



                                <label for="">City</label>
                                <select name="city" class="form-control">
                                    <option value="">Select City</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Pune">Pune</option>
                                </select>
                                <span class="error">* <?php if (isset($validation['cityErr'])) {
                                                            echo $validation['cityErr'];
                                                        } ?></span>
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male">
                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female">
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
                                <button name="submit" type="submit" class="btn btn-success w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>