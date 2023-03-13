<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CERATE USER</title>
    <style>
    .form{
        border: 2px solid black;
        height: 475px;
        width: 450px;
        margin-left: 687px;
        margin-top: 155px;
    }
    .setform{
        margin: 10px;
    }
    </style>
</head>
<body>
   
    <form action="index.php" method="post" class="form">
        <h1 align="center">USER FORM</h1>
        <div class="setform">
        NAME : <input type="text" name="name" required>
        <br>
        <br>
        ROLL NO : <input type="roll" name="roll" required>
        <br>
        <br>
        PHONE NO : <input type="phone" name="phone" required>
        <br>
        <br>
        AGE : <input type="age" name="age" required>
        <br>
        <br>
        EMAIL : <input type="email" name="email" required>
        <br>
        <br>
        FATHER NAME : <input type="text" name="father" required>
        <br>
        <br>
        GENDER : 
        <br>
        MALE <input type="radio" name="gender" value="m" required>
        FEMALE <input type="radio" name="gender" value="f" required>
        <br>
        <br>
        HOBBIES :
        <br>
        CRICKET : <input type="checkbox" name="hobbies" required>
        FOOTBALL : <input type="checkbox" name="hobbies" required>
        BASKETBALL : <input type="checkbox" name="hobbies" required>
        <br>
        <br>
        <input type="RESET">
        <input type="SUBMIT" name="submit">
        </div>
    </form>
</body>
</html>