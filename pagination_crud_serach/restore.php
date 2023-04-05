<?php
include 'config.php';

if (isset($_POST['search'])) {
    $value = trim($_POST['search']);
    $sql = "SELECT * FROM pagination_crud_form WHERE CONCAT(`name`,`email`) LIKE '%$value%'";
}else{
    $sql = "SELECT `id`, `name`, `email`, `password`, `gender`, `file`, `hobbies` FROM `pagination_crud_form` WHERE `deleted_at`=`1`";
}


$sql = "SELECT * FROM pagination_crud_form";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)) {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>
        <table class="table table-hover table-bordered">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group d-flex justify-content-left my-3">
                            <input type="text" name="search" class="form-control w-25">
                            <button type="submit" name="submit" class="btn btn-success">Search</button>
                        </div>
                    </div>
                </div>
            </form>
            <tr>
                <th><b>Sr No</b></th>
                <th><b>Name</b></th>
                <th><b>Email</b></th>
                <th><b>Password</b></th>
                <th><b>Gender</b></th>
                <th><b>File</b></th>
                <th><b>Hobbies</b></th>
                <th><b>RESTORE</b></th>
              
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['file']; ?></td>
                    <td><?php echo $row['hobbies']; ?></td>
                    <td><a href="restore1.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success">Restore</button></a></td>
                </tr>
                <?php }} else { ?>
                <div>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-center d-flex justify-content-center margin-left:100">
                        <h2><b>No such record</b></h2>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                </div>
        <?php } ?>

    </body>

    </html>