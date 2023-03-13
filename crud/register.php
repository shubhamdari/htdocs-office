<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Register Form</title>
</head>

<body>
    <?php
    $ok = "";
    $fname = "";
    $lname = "";
    $email = "";
    $mobile = "";
    $pass = "";
    $confirnpass = "";
    $err = false;
    if (isset($_GET['err'])) {
        $err = true;
        $errArr = explode(",", $_GET['err']);
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-primary text-center"><b>Register Form</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="store.php" method="post">
                                <label for=""><b>First Name :</b></label>
                                <input type="text" name="fname" class="form-control" value="<?php echo htmlspecialchars($fname, ENT_QUOTES) ?>">
                                <span style="color:red;"><?php if ($err) { echo $errArr[0];}?></span><br><br>

                                <label for=""><b>Last Name :</b></label>
                                <input type="text" name="lname" class="form-control" value="<?php echo htmlspecialchars($lname, ENT_QUOTES) ?>">
                                <span style="color:red;"><?php if ($err) {echo $errArr[1];} ?></span><br><br>

                                <label for=""><b>Email :</b></label>
                                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email, ENT_QUOTES) ?>">
                                <span style="color:red;"><?php if ($err) {echo $errArr[2];} ?></span><br><br>


                                <label for=""><b>Mobile :</b></label>
                                <input type="number" name="mobile" class="form-control" value="<?php echo htmlspecialchars($mobile, ENT_QUOTES) ?>">
                                <span style="color:red;"><?php if ($err) {echo $errArr[3];} ?></span><br><br>


                                <label for=""><b>Password :</b></label>
                                <input type="password" name="pass" class="form-control" value="<?php echo htmlspecialchars($pass, ENT_QUOTES) ?>">
                                <span style="color:red;"><?php if ($err) {echo $errArr[4];} ?></span><br><br>


                                <label for=""><b>Confirn Password :</b></label>
                                <input type="password" name="confirnpass" class="form-control" value="<?php echo htmlspecialchars($confirnpass, ENT_QUOTES) ?>">
                                <span style="color:red;"><?php if ($err) {echo $errArr[5];} ?></span><br><br>

                                <button type="submit" class="btn btn-primary w-100" name="submit">Register</button>
                                <div class="container mt-1">
                                    <p><b>Already have an account? <a href="login.php">Login</a>.</b></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>