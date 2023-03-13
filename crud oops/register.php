<?php
require_once('config.php');
if (isset($_POST['submit'])) {
    // $course_str = implode(',', $_POST['course']); 
    $insert = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'gender' => $_POST['gender'],
        'city' => $_POST['city'],
        'course' => implode(',', $_POST['course']),
        'img' => $_POST['img'],
        'pass' => $_POST['pass']
    ];
    foreach ($insert as $val) {
        if ($val == "") {
            $ok = false;
        } else {
            $ok = true;
        }
    }
    if (!$ok) {
        echo "Plz Fill All Fields";
    } else {
        $col = implode(',', array_keys($insert));
        $value = "'" . implode("','", $insert) . "'";
        $sql = "INSERT INTO `register_form`($col) VALUES ($value)";
        $result = ($conn->query($sql) === TRUE);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-center">
                                <b class="text-info">Register Page</b>
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <label for=""><b>Name : </b></label>
                                <input type="text" name="name" class="form-control">
                                <br>

                                <label for=""><b>Email : </b></label>
                                <input type="email" name="email" class="form-control">
                                <br>

                                <label for=""><b>Phone : </b></label>
                                <input type="number" name="phone" class="form-control">
                                <br>

                                <label for=""><b>Gender : </b></label>
                                <br>
                                <label for="Male"><b>Male : </b></label>
                                <input type="radio" name="gender" id="Male" value="Male">
                                <br>
                                <label for="Female"><b>Female : </b></label>
                                <input type="radio" name="gender" id="Female" value="Female">
                                <br>

                                <bR>

                                <label for=""><b>City : </b></label>
                                <select name="city" id="" class="btn btn-info">
                                    <option>Select Course</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                </select>
                                <br>

                                <bR>

                                <label for=""><b>Course : </b></label>

                                <br>
                                <Label for="html"><b>HTML :</b></Label>
                                <input type="checkbox" name="course[]" id="html" value="html">
                                <bR>
                                <Label for="css"><b>CSS :</b></Label>
                                <input type="checkbox" name="course[]" id="css" value="css">
                                <br>
                                <Label for="php"><b>PHP :</b></Label>
                                <input type="checkbox" name="course[]" id="php" value="php">
                                <br>
                                <br>

                                <label for=""><b>Image : </b></label>
                                <input type="file" name="img" class="form-control">
                                <br>
                                <label for=""><b>Password : </b></label>
                                <input type="password" name="pass" class="form-control">
                                <br>

                                <label for=""><b>Confirm Password : </b></label>
                                <input type="password" name="confirmpass" class="form-control">
                                <br>
                                <bR>

                                <button name="submit" class="btn btn-info w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>