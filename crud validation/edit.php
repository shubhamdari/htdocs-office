<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>

</head>
<?php
include 'config.php';
$id =  $_GET['id'];
$sql = "SELECT * FROM `student_set` WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-danger"><b>Update Form</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control" value=" <?php echo $row['name']; ?>">
                                <br>

                                <label for=""><b>E-mail :</b></label>
                                <input type="text" name="email" class="form-control" value=" <?php echo $row['email']; ?>">
                                <br>

                                <label for=""><b>Website :</b></label>
                                <input type="text" name="website" class="form-control" value=" <?php echo $row['website']; ?>">
                                <br>

                                <label for=""><b>Comment :</b></label>
                                <textarea name="comment" rows="5" cols="40" class="form-control" value="<?php echo $row['comment']; ?>"></textarea>
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male" <?php if ($row['gender'] == 'Male') {
                                                                                                echo "checked";
                                                                                            } ?>>
                                <br>
                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female" <?php if ($row['gender'] == 'Female') {
                                                                                                echo "checked";
                                                                                            } ?>>
                                <br>
                                <br>
                                <button type="submit" name="submit" class="btn btn-danger w-100">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>