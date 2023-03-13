<?php
// 1 create cookie
// setcookie(name,value,expire,path,domain,secure,httponly)

// 2 view cookie value 
// $_COOKIE[name]

// 3 delete cookie
// setcookie("user","",time() - (86400 * 30), "/");


$cookie_name = "user";
$cookie_value  = "yahoo baba";

setcookie($cookie_name,$cookie_value,time() + 60, "/");
?> 
<html>
<body>
    <?php

    echo $_COOKIE[$cookie_name];
    ?>
</body>   
</html>
