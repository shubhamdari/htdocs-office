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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-primary text-center"><b>Update Form</b></h1>
                        </div>
                        <div class="card-body">
                            <?php
                            include 'config.php';
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM `user` WHERE id='$id'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
                                <label for=""><b>First Name :</b></label>
                                <input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>">
                                <br>

                                <label for=""><b>Last Name :</b></label>
                                <input type="text" name="lname" class="form-control" value="<?php echo $row['lname']; ?>">
                                <br>

                                <label for=""><b>Email :</b></label>
                                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                                <br>


                                <label for=""><b>Mobile :</b></label>
                                <input type="number" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
                                <br>


                                <label for=""><b>Password :</b></label>
                                <input type="password" name="pass" class="form-control" value="<?php echo $row['pass']; ?>">
                                <br>


                                <label for=""><b>Confirn Password :</b></label>
                                <input type="password" name="confirnpass" class="form-control" value="<?php echo $row['pass']; ?>">
                                <br>

                                <button type="submit" class="btn btn-primary w-100" name="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>