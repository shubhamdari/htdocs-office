<!DOCTYPE html>
<html lang="en">

<?php
if (isset($_POST['submit'])) {
    include 'store2.php';
} else {
    $validation = ['emailErr' => ""];
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        .error {
            color: #ff0000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h1 class="text-danger"><b>Student Form</b></h1>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <label for=""><b>Name :</b></label>
                                <input type="text" name="name" class="form-control" value="">
                                <span class="error">* <?php if(isset($validation['nameErr'])){ echo $validation['nameErr'];} ?></span>
                                <br>

                                <label for=""><b>E-mail :</b></label>
                                <input type="text" name="email" class="form-control" value="">
                                <span class="error">* <?php if(isset($validation['emailErr'])){ echo $validation['emailErr'];} ?></span>
                                <br>

                                <label for=""><b>Website :</b></label>
                                <input type="text" name="website" class="form-control" value="">
                                <span class="error">* <?php if(isset($validation['websiteErr'])){ echo $validation['websiteErr'];} ?></span>
                                <br>

                                <label for=""><b>Comment :</b></label>
                                <textarea name="comment" rows="5" cols="40" class="form-control"></textarea>cli_set_process_title
                                <span class="error">* <?php if(isset($validation['commentErr'])){ echo $validation['commentErr'];} ?></span>
                                <br>

                                <label for=""><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male" <?php if (isset($gender) && $gender == "Male") echo "checked"; ?>>                                <br>
                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female" <?php if (isset($gender) && $gender == "Female") echo "checked"; ?>>
                                <br>

                                <span class="error">* <?php if(isset($validation['genderErr'])){ echo $validation['genderErr'];} ?></span>

                                <br>
                                <br>
                                <button type="submit" name="submit" class="btn btn-danger w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>