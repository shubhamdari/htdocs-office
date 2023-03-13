<?php
$var = "192.158.1.38";

var_dump(filter_var($var,FILTER_VALIDATE_IP));

if(filter_var($var,FILTER_VALIDATE_IP)){
    echo "<br>  $var is valid ip";
}else{
    echo "<br> $var is not an valid ip";
}
// FILTER_VALIDATE_INT
// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_IP 
// FILTER_VALIDATE_BOOLEAN
// FILTER_VALIDATE_FLOAT
// FILTER_VALIDATE_STRING 
// FILTER_VALIDATE_MAC
// FILTER_VALIDATE_REGEXP
?>






