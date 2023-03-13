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
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h1><b class="text-primary">Student Form</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="store.php" method="post">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="">
                                <br>

                                <label for=""><b>Email :</b></label>
                                <input type="email" name="email" class="form-control" placeholder="Example@gmail.com" value="">
                                <br>

                                <label for=""><b>Password :</b></label>
                                <input type="password" name="pass" class="form-control" placeholder="Password" value="">
                                <br>

                                <label for=""><b>Phone :</b></label>
                                <input type="number" name="phone" class="form-control" placeholder="+91............" value="">
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <bR>
                                <Label for="Male"><b>Male :</b></Label>
                                <input type="radio" name="gender" id="Male" value="Male">
                                <br>
                                <Label for="Female"><b>Female :</b></Label>
                                <input type="radio" name="gender" id="Female" value="Female">
                                <br>
                                <Br>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>