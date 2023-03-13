<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM student_register_from WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$course = explode(',',$row['course']);

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
    <title>Student Form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-success"><b>Update Form</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                                <br>

                                <label for=""><b>Password :</b></label>
                                <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">
                                <br>

                                <label for=""><b>E-mail :</b></label>
                                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                                <br>


                                <label for=""><b>Phone :</b></label>
                                <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>">
                                <br>



                                <label for=""><b>Course :</b></label>
                                <br>
                                <label for="HTMl">HTML :</label>
                                <input type="checkbox" name="course[]" id="HTMl" value="HTMl" <?php if (in_array('HTMl', $course)) {
                                                                                                    echo 'checked';
                                                                                                } ?>>
                                <br>
                                <label for="CSS">CSS :</label>
                                <input type="checkbox" name="course[]" id="CSS" value="CSS" <?php if (in_array('CSS', $course)) {
                                                                                                echo 'checked';
                                                                                            } ?>>
                                <br>
                                <label for="PHP">PHP :</label>
                                <input type="checkbox" name="course[]" id="PHP" value="PHP" <?php if (in_array('PHP', $course)) {
                                                                                                echo 'checked';
                                                                                            } ?>>
                                <br>
                                <label for="JAVA">JAVA :</label>
                                <input type="checkbox" name="course[]" id="JAVA" value="JAVA" <?php if (in_array('JAVA', $course)) {
                                                                                                    echo 'checked';
                                                                                                } ?>>
                                <br>
                                <br>



                                <label for="">City</label>
                                <select name="city" class="form-control">
                                    <option>Select City</option>
                                    <option value="Mumbai" <?php if ($row['city'] == 'Mumbai') {
                                                                echo 'selected = selected';
                                                            } ?>>Mumbai</option>
                                    <option value="Delhi" <?php if ($row['city'] == 'Delhi') {
                                                                echo 'selected = selected';
                                                            } ?>>Delhi</option>
                                    <option value="Bangalore" <?php if ($row['city'] == 'Bangalore') {
                                                                    echo 'selected = selected';
                                                                } ?>>Bangalore</option>
                                    <option value="Hyderabad" <?php if ($row['city'] == 'Hyderabad') {
                                                                    echo 'selected = selected';
                                                                } ?>>Hyderabad</option>
                                    <option value="Pune" <?php if ($row['city'] == 'Pune') {
                                                                echo 'selected = selected';
                                                            } ?>>Pune</option>
                                </select>
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male" <?php if ($row['gender'] == 'Male') {
                                                                                                echo "checked";
                                                                                            } ?>>
                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female" <?php if ($row['gender'] == 'Female') {
                                                                                                    echo "checked";
                                                                                                } ?>>
                                <br>
                                <br>

                                <label for=""><b>File :</b></label>
                                <input type="file" name="file" class="form-control" value="<?php echo $row['file']; ?>">
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