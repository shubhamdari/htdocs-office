<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Regsitration</title>
</head>
<body>
    <?php 
    include "config.php";
    $id = $_GET['id'];

    $sql = "SELECT * FROM `employe_regsitration`";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="update.php?id=<?php echo $row['id']; ?>" method="post">
   
        <h1><b>Employees Regsitration Form update</B></h1>
        <b>Employ Name :</b>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <br>
        <br>
        <b>Employ Age :</b>
        <input type="number" name="age" value="<?php echo $row['age']; ?>">
        <br>
        <br>
        <b>Employ Salary :</b>
        <input type="number" name="salary" value="<?php echo $row['salary']; ?>">
        <br>
        <br>
        <b>Desgination :</b>
        <select name="desgination" id="">
            <option>Select Desgination</option>
            <option value="PHP" <?php if($row['desgination'] == 'PHP'){echo "selected";} ?>>PHP</option>
            <option value="CSS" <?php if($row['desgination'] == 'CSS'){echo "selected";} ?>>CSS</option>
            <option value="HTML" <?php if($row['desgination'] == 'HTML'){echo "selected";} ?>>HTML</option>
        </select>
        <br>
        <br>
        <b>Employ email :</b>
        <input type="email" name="email" value="<?php echo $row['email']; ?>">
        <br>
        <br>
        <b>Hobbies :</b>
        <br>
        <b>Cricket :</b><input type="checkbox" name="hobbies" value="Cricket" <?php  if($row['hobbies'] == 'Cricket'){echo "checked";} ?>>
        <b>Football :</b><input type="checkbox" name="hobbies" value="Football" <?php  if($row['hobbies'] == 'Football'){echo "checked";} ?>>
        <b>basketball :</b><input type="checkbox" name="hobbies" value="basketball" <?php  if($row['hobbies'] == 'basketball'){echo "checked";} ?>>
        <br>
        <br>
        <b>Employ Shift :</b>
        <BR>
        <b>day :</b><input type="radio" name="shift" value="Day" <?php  if($row['shift'] == 'Day'){echo "checked";} ?> >
        <b>Noon :</b><input type="radio" name="shift" value="Noon" <?php  if($row['shift'] == 'Noon'){echo "checked";} ?>>
        <b>Night :</b><input type="radio" name="shift" value="Night" <?php  if($row['shift'] == 'Night'){echo "checked";} ?>>
        <BR>
        <BR>
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>