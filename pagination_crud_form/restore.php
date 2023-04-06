<?php
include 'config.php';



$num_pre_number = 5;


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start_form = ($page - 1) * $num_pre_number;




if (isset($_POST['search'])) {
    $value = trim($_POST['search']);
    $sql = "SELECT * FROM `pagination_crud_prac` WHERE CONCAT(`name`,`email`) LIKE '%$value%' ";

} else {
    $sql = "SELECT * FROM `pagination_crud_prac` WHERE `deleted_at`= '1' LIMIT    $start_form,$num_pre_number ";
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
    <a href="index.php"><button class="btn btn-info">View All</button></a>
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
    <table class="table table-hover table-bordered">
        <tr>
            <th><b>Sr No</b></th>
            <th><b>Name </b></th>
            <th><b>Email </b></th>
            <th><b>Password </b></th>
            <th><b>File </b></th>
            <th><b>Gender </b></th>
            <th><b>Hobbies</b></th>
            <th><b>Restore</b></th>
            <th><b>Delete</b></th>

        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['file']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['hobbies']; ?></td>
                    <th><a href="restore1.php?id=<?php echo $row['id']; ?>"><button class="btn btn-info">Restore</button></a></th>
                    <th><a href="delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-info">Delete</button></a></th>
                    
                </tr>
            <?php $count++;
            }
        } else { ?>
            <div>
                <td></td>
                <td></td>
                <td></td>
                <td class="d-flex justify-content-cender mx-1">Such no recored</td>
                <td></td>
                <td></td>
                <td></td>
            </div>
        <?php   }     ?>
    </table>
    <?php
    $sql1 = "SELECT * FROM pagination_crud_prac";
    $result1 = mysqli_query($conn, $sql1);
    $totalrecored = mysqli_num_rows($result1);
    $totalpaginatin = ceil($totalrecored / $num_pre_number);

    echo "<ul class='pagination admin-pagination'>";

    for ($btn = 1; $btn <= $totalpaginatin; $btn++) {


        echo "<a href='index.php? page=" . $btn . "'>
            <button class='btn btn-info mx-1'>" . $btn . "</button>
        </a>";
    }
    echo "</ul>";
    ?>
  
</body>

</html>