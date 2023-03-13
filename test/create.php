<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Student Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h2 class="text-center"><b class="text-primary">STUDENT INFORMATION</b></h2>
                        </div>
                        <div class="card-body">
                            <form action="store.php" method="post">
                                <label><b>Name :</b></label>
                                <input type="text" name="name" value="" placeholder="Name" class="form-control">
                                <br>

                                <label><b>Mobile :</b></label>
                                <input type="tel" name="mobile" value="" placeholder="000000000" class="form-control">
                                <br>

                                <label><b>Gender :</b></label>
                                <br>
                                <label for="Male"><b>Male :</b></label>
                                <input type="radio" name="gender" id="Male" value="Male">

                                <label for="Female"><b>Female :</b></label>
                                <input type="radio" name="gender" id="Female" value="Female">
                                <br>
                                 <br>       
                                <label><b>Email :</b></label>
                                <input type="email" name="email" value="" placeholder="Email@example.com" class="form-control">
                                <br>
                            

                                <label><B>Choose Your Course :</b></label>
                                <select name="course" class="btn btn-primary"><b>Selected Course</b>
                                    <option value="BBA">BBA</option>
                                    <option value="BMS">BMS</option>
                                    <option value="BFA">BFA</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BSW">BSW</option>
                                    <option value="BFD">BFD</option>
                                </select>
                                <bR>
                                <bR>
                            
                                <button name="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>