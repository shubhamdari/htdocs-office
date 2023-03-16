<?php
include 'login_check.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Login Form</title>
</head>
<style>
    button {
        width: 1140px;
    }

    .error {
        color: red;
    }
</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-success text-center"><b><i>Login Form</i></b></h1>
                        </div>
                        <div class="card-body">
                            <?php
                            if ($_GET['msg'] == 'session_expire') {
                            ?>
                                <div>
                                    <span class="error"><h3>Please Login Again</h3></span>
                                </div>
                            <?php } ?>
                            <div>
                                <form action="" method="post" class="mt-5">
                                    <label for=""><b>Email :</b></label>
                                    <input type="text" name="email" class="form-control">
                                    <?php
                                    if (isset($validation['emailErr'])) {
                                    ?>
                                        <div>
                                            <span class="error">* Email is required</span>
                                        </div>
                                    <?php } ?>

                                    <br>

                                    <label for=""><b>Password :</b></label>
                                    <input type="password" name="password" class="form-control">
                                    <?php
                                    if (isset($validation['passErr'])) {
                                    ?>
                                        <div>
                                            <span class="error">* <?php echo $validation['passErr']; ?></span>
                                        </div>
                                    <?php } ?>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-success w-100">Login</button>
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