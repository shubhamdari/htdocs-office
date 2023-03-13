<!DOCTYPE html>
<html>
    <head>
        <title>
            SERVER SUPERGLOBAL 
        </title>
        <body>
            <form action="<?php $_SERVER["PHP_SELF"];  ?>" method="post">

                Name : <input type="text" name="name"><br/><br/>

                Age : <input type="text" name="age"><br/><br/>

                <input type="submit" name="save">
            </form>
            <?php
                if(isset($_POST["save"])){
                    echo $_POST["name"] . "<br>";
                    echo $_POST["age"] . "<br>";
                }
            ?>
        </body>
    </head>
</html>

