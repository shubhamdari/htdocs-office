<?php

include "config.php";
$num_pre_number = 2;


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start_form = ($page - 1) * $num_pre_number;




if (isset($_POST['search'])) {
    $value = trim($_POST['search']);
    $sql = "SELECT * FROM `april_table1` WHERE CONCAT(`name`,`email`) LIKE '%$value%' ";
} else {
    $sql = "SELECT * FROM `april_table1` WHERE `role_id`= '0' && `deleted_at`='1'  LIMIT    $start_form,$num_pre_number ";
}











// $sql ="SELECT  * FROM `april_table1` WHERE `role_id`='0' ";

$result = mysqli_query($conn, $sql);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <title>Admin</title>
</head>

<body>


    <div class="container my-3">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Admin_page</h3>

                        <a href="admin_dashboard.php"><button class="btn btn-primary">View All</button></a>
                        <form action="" method="post">
                            <div class="conatiner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group d-flex justify-content-left my-3">
                                            <input type="text" name="search" class="form-control w-25">
                                            <button type="submit" name="submit" class="btn btn-info">search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="card-body my-3">

                            <div class="card">

                                <table class="table stripped-hover">

                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Pass</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <?php if (mysqli_num_rows($result) > 0) { ?>
                                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                                            <tbody>

                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['pass'] ?></td>
                                                    <td>
                                                        <a href="restore1.php?id=<?php echo $row['id'] ?>"><button class="btn btn-success">Restore</button></a>
                                                        <!-- <a href="deleted_at.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Delete</button></a> -->
                                                    </td>


                                                </tr>

                                            </tbody>

                                        <?php }
                                    } else { ?>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>No Such records</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php } ?>

                                </table>

                                <?php
                                $sql1 = "SELECT * FROM april_table1 ";
                                $result1 = mysqli_query($conn, $sql1);
                                $totalrecored = mysqli_num_rows($result1);
                                $totalpaginatin = ceil($totalrecored / $num_pre_number);

                                echo "<ul class='pagination admin-pagination'>";

                                for ($btn = 1; $btn <= $totalpaginatin; $btn++) {


                                    echo "<a href='admin_dashboard.php? page=" . $btn . "'>
                                            <button class='btn btn-info mx-1'>" . $btn . "</button>
                                            </a>";
                                }
                                echo "</ul>";
                                ?>



                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="./Bootstrap/bootstrap.bundle.js"></script>
</body>

</html>