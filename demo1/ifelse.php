<?php
$a = 1;
if($a == 1){
    echo "true";
}
else{
    echo "false";
}
?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$drive = 25;
if($drive > 25){
    echo "You can driver a car";
}
elseif($drive < 65){
    echo "You can driver but your age is less than 65";
}
else{
    echo "You cannot drive a car";
}

echo " Done";

?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$age = 18;
if($age >= 18){
    echo "You can vote";
}
else{
    echo "You cannot vote";
}

?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$per = 40;
if($per >= 80 && $per <= 100){
    echo "Merit";
}elseif($per >= 60 && $per <= 79){
    echo "1st Division";
}elseif($per >= 45  && $per <= 59){
    echo "2st Division";
}elseif($per >= 33 && $per <= 40){
    echo "3st Division";
}else{
    echo "Less than 33% and your fail";
}

?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$car = 10;
if($car > 10 ){
    echo "You can buy a car";
}else{
    echo "you cannot buy a car";
}
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$day = 5;
switch($day){
    case 1:
        echo "today is monday";
    break; 
    case 2:
        echo "today is tuesday";
    break;   
    case 3:
        echo "today is wednesday";
    break;
    case 4:
        echo "today is thursday";
    break;
    case 5:
        echo "today is friday";
    break;
    case 6:
        echo "today is saturday";
    break;
    case 7:
        echo "today is sunday";
    break;
    default:
        echo "enter the valid week day";
    break;
}
 

?>