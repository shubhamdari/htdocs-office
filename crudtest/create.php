<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Regsitration</title>
</head>
<body>
    <form action="store.php" method="post">
        <h1><b>Employees Regsitration</B></h1>
        <b>Employ Name :</b>
        <input type="text" name="name" placeholder="Name" value="">
        <br>
        <br>
        <b>Employ Age :</b>
        <input type="number" name="age" placeholder="+91.........." value="">
        <br>
        <br>
        <b>Employ Salary :</b>
        <input type="number" name="salary" placeholder="000000000" value="">
        <br>
        <br>
        <b>Desgination :</b>
        <select name="desgination" id="">
            <option></option>
            <option value="PHP">PHP</option>
            <option value="CSS">CSS</option>
            <option value="HTMl">HTMl</option>
        </select>
        <br>
        <br>
        <b>Employ email :</b>
        <input type="email" name="email" placeholder="Email@example.com" value="">
        <br>
        <br>
        <b>Hobbies :</b>
        <br>
        <b>Cricket :</b><input type="checkbox" name="hobbies" value="Cricket">
        <b>Football :</b><input type="checkbox" name="hobbies" value="Football">
        <b>basketball :</b><input type="checkbox" name="hobbies" value="basketball">
        <br>
        <br>
        <b>Employ Shift :</b>
        <BR>
        <b>day :</b><input type="radio" name="shift" value="Day">
        <b>Noon :</b><input type="radio" name="shift" value="Noon">
        <b>Night :</b><input type="radio" name="shift" value="Night">
        <BR>
        <BR>
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>