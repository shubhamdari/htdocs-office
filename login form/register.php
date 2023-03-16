<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Register Form</title>
    <style>
        button {
            width: 1140px;
        }
        .error{
            color: red;
        }
        .set{
            color: #303030;
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
                            <h1 class="text-success text-center"><b><i>Register Form</i></b></h1>
                        </div>
                        <div class="card-body">
                            <div>
                                <form action="" method="post" class="mt-5">
                                    <label for=""><b>Name :</b></label>
                                    <input type="text" name="name" class="form-control">
                                    <span class="error">* <?php if(isset($validation['nameErr'])){echo $validation['nameErr'];} ?></span>
                                    <br>

                                    <label for=""><b>Email :</b></label>
                                    <input type="text" name="email" class="form-control">
                                    <span class="error">* <?php if(isset($validation['emailErr'])){echo $validation['emailErr'];} ?></span>
                                    <br>

                                    <label for=""><b>Password :</b></label>
                                    <input type="password" name="password" class="form-control">
                                    <sapn class="error">* <?php if(isset($validation['passwordErr'])){echo $validation['passwordErr'];} ?></span>
                                    <br>


                                    <label for="" class="set"><b>Confirm Password :</b></label>
                                    <input type="password" name="confirm_password" class="form-control">
                                    <sapn class="error">* <?php if(isset($validation['passwordErr'])){echo $validation['passwordErr'];} ?></span>
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
    </div>
</body>

</html>