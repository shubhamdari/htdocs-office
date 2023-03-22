<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Update Form</title>
</head>
<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM studend_record WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hobbies = explode(',', $row['hobbies']);
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-center text-success"><b>Student Update Form</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control" required value="<?php echo $row['name']; ?>">
                                <br>

                                <label for=""><b>Email :</b></label>
                                <input type="email" name="email" class="form-control" required value="<?php echo $row['email']; ?>">
                                <br>

                                <label for=""><b>Password :</b></label>
                                <input type="password" name="password" class="form-control" required value="<?php echo $row['password']; ?>">
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male" required <?php if ($row['gender'] == 'Male') {
                                                                                                        echo 'checked';
                                                                                                    } ?>>
                                <br>
                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female" required <?php if ($row['gender'] == 'Female') {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
                                <br>
                                <br>

                                <label for=""><b>Phone :</b></label>
                                <input type="number" name="phone" class="form-control" required value="<?php echo $row['phone']; ?>">
                                <br>

                                <label for=""><b>City :</b></label>
                                <br>
                                <select name="city" class="btn btn-success" required>
                                    <option value="">Select City</option>
                                    <option value="delhi" <?php if ($row['city'] == 'dehli') {
                                                                echo 'selected';
                                                            } ?>>Delhi</option>
                                    <option value="mumbai" <?php if ($row['city'] == 'mumbai') {
                                                                echo 'selected';
                                                            } ?>>Mumbai</option>
                                    <option value="Bangalore" <?php if ($row['city'] == 'Bangalore') {
                                                                    echo 'selected';
                                                                } ?>>Bangalore</option>
                                    <option value="Hyderabad" <?php if ($row['city'] == 'Hyderabad') {
                                                                    echo 'selected';
                                                                } ?>>Hyderabad</option>
                                </select>
                                <br>
                                <br>

                                <label for=""><b>Image :</b></label>
                                <input type="file" name="fileuploaded" class="form-control" required value="<?php echo $row['fileuploaded']; ?>">
                                <br>

                                <label for=""><b>Hobbies :</b></label>
                                <br>
                                <label for="Reading Book"><b>Reading Book :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Reading Book" value="Reading Book" required <?php if (in_array('Reading Book', $hobbies)) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
                                <label for="Coding"><b>Coding :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Coding" value="Coding" required <?php if (in_array('Coding', $hobbies)) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                                <label for="Playing Game"><b>Playing Game :</b></label>
                                <input type="checkbox" name="hobbies[]" id="Playing Game" value="Playing Game" required <?php if (in_array('Playing Game', $hobbies)) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
                                <br>
                                <br>

                                <button type="submit" class="btn btn-success w-100" name="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>