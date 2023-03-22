<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Fetch Data</title>
</head>

<body>
    <?php
    include 'config.php';

    $sql = 'SELECT * FROM studend_record';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
        <a href="create.php"><button type="submit" class="btn btn-success">ADD DATA</button></a>
        <table class="table table-hover table-bordered">
            <tr>
                <th>#</th>
                <th><b>Name</b></th>
                <th><b>Email</b></th>
                <th><b>Password</b></th>
                <th><b>Gender</b></th>
                <th><b>Phone</b></th>
                <th><b>City</b></th>
                <th><b>Image</b></th>
                <th><b>Hobbies</b></th>
                <th><b>Edit</b></th>
                <th><b>Delete</b></th>
            </tr>
            <?php
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['fileuploaded']; ?></td>
                    <td><?php echo $row['hobbies']; ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id'] ?>"><button class="btn btn-success">Edit</button></a></td>
                    <td><a href="delete.php?id=<?php echo $row['id'] ?>"><button class="btn btn-success">Delete</button></a></td>
                </tr>
            <?php $count++;
            } ?>
        </table>
    <?php } ?>
</body>

</html>