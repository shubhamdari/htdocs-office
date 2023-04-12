<?php
include 'config.php';

session_start();
if ((isset($_SESSION['role_id']) && $_SESSION['role_id'] == 0) || (isset($_SESSION['auth']) && $_SESSION['auth'] != 1)) {
    header("location:javascript://history.go(-1)");
}
$pagination = 5;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start_form = ($page - 1) * $pagination;

if (isset($_POST['search'])) {
    $value = trim($_POST['search']);
    $sql = "SELECT * FROM login_register WHERE  `deleted_at`='0' && `role`=0 && CONCAT(`name`,`email`) LIKE '%$value%'";
} else {
    $sql = "SELECT * FROM login_register WHERE  `role`='0' && `deleted_at`='0' LIMIT $start_form,$pagination";
}

$result = mysqli_query($conn, $sql);
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
<a href="logout.php" class="btn btn-success">Logout</a>
    <a href="restore.php" class="btn btn-success">Restore</a>
    <form action="" method="post">
        <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group d-flex justify-content-left">
                        <input type="text" name="search" class="from-control w-25">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <table class="table table-hover table-bordered">
        <tr>
            <th><b>Id </b></th>
            <th><b>Name </b></th>
            <th><b>Email </b></th>
            <th><b>Gender </b></th>
            <th><b>Mobile </b></th>
            <th><b>File </b></th>
            <th><b>State </b></th>
            <th><b>Hobbies </b></th>
            <th><b>Address </b></th>
            <th><b>Delete </b></th>

        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['profile_photo']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['hobbies']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><a href="deleted_at.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success">Delete</button></a></td>

                </tr>
            <?php }
        } else { ?>
            <div>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="d-flex justify-content-center"><b>Such No Record</b> </td>
                <td></td>
                <td></td>
                <td></td>
            </div>
        <?php } ?>
    </table>
    <?php
    $sql1 = "SELECT * FROM login_register WHERE `role`=0 ";
    $result1 = mysqli_query($conn, $sql1);
    $totalrecord = mysqli_num_rows($result1);
    $totalpage = ceil($totalrecord / $pagination);

    echo "<ul class='pagination admin-pagination'>";

    for ($btn = 1; $btn <= $totalpage; $btn++) {
        echo "<a href='admin.php?page=" . $btn . "'>
        <button class='btn btn-success mx-1'>" . $btn . "</button>
        </a>";
    }
    echo "</ul>";
    ?>
</body>

</html>