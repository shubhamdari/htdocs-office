<?php
$string = "PHP is the web scripting php language of choice";

$exp = preg_match_all("/[^5-0]/",$string,$array);

if($exp){
    echo "A match was found";
}else{
    echo "A match was not found";
}

echo "<pre>";
print_r($array);
echo "</pre>";

?>