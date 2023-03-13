<!DOCTYPE html>
<html>

<head>
    <title>Super Global</title>
</head>

<body>

<!-- $_REQUEST -->
    <form action="test.php" method="REQUEST">
        Name : <input type="text" name="name"><br /><br />

        Age : <input type="Text" name="age"><br /><br />

        <input type="Submit" name="save">
    </form>

<!--$_GET  -->
    <form action="test.php" method="get">
        Name : <input type="text" name="name"><br /><br />

        Age : <input type="Text" name="age"><br /><br />

        <input type="Submit" name="save">
    </form>

<!-- $_POST -->
    <form action="test.php" method="post">
        Name : <input type="text" name="name"><br /><br />

        Age : <input type="Text" name="age"><br /><br />

        <input type="Submit" name="save">
    </form>
</body>

</html>