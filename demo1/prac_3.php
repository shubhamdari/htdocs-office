<?php
// step 1 first using variable 
$a = 21;
$b = 30;
$c = 20;
// step 2 using a if else condition and check this is greater 
// no  
if($a > $b && $a > $c){
    echo "Greater is not $a";
}
elseif($b > $a && $b > $c){
    echo "Greater is $b";
}
elseif($c > $a && $c > $b){
    echo "Greater is $c";
}
else{
    echo "false";
}
?>
