
<?php
// Question No : 1
echo "<h1>NESTED LOOPS</h1>";
?>


<?php
for($row = 1; $row <= 5; $row++){
    for($col = 1; $col <= $row; $col++){
        echo "*";
    }
    echo "<br>";
}


?>

<?php
    echo "<br>";
    echo "<br>";
    echo "<br>";
    for($row = 1; $row <= 5; $row++){
         for($col = 1; $col <= $row; $col++){
             echo $row;
        }
     echo "<br>";
}

?>
<?php
    echo "<br>";
    echo "<br>";
    echo "<br>";
    for($row = 1; $row <= 5 ; $row++){
         for($col = 1; $col <= $row; $col++){
             echo $col;
        }
     echo "<br>";
}

?>


<?php
// Question No : 2
// write a program to calculate profit or lose on a transaction. 
//  cost prize = 500.  sale prize = 700
echo "<br>";
echo "<br>";
echo "<br>";

$cost = 500;
$sale = 900;
$result = "result";  
$oper = '+';
if($oper == '+'){
    $result = $cost + $sale;
    echo "<h1>PROFIT</h1>";
    echo $result; 
}else{
    echo "LOST";
}
?>



<?php
// Question No : 3
// write a program to read any month number in integer and display
//  the number days for this month.

echo "<br>";
echo "<br>";
echo "<br>";


$a = 10;
if($a == 1){
    echo "<h1>MONTH</h1>";
    echo "Month of January have 31 Days";
}elseif($a == 2){
    echo "<h1>MONTH</h1>";
    echo "Month of february have 28 day";
}elseif($a == 3){
    echo "<h1>MONTH</h1>";
    echo "Month of March have 31 day";
}elseif($a == 4){
    echo "<h1>MONTH</h1>";
    echo "Month of April have 30 day";
} elseif($a == 5){
    echo "<h1>MONTH</h1>";
    echo "Month of May have 31 day";
} elseif($a == 6){
    echo "<h1>MONTH</h1>";
    echo "Month of June have 30 day";
} elseif($a == 7){
    echo "<h1>MONTH</h1>";
    echo "Month of July have 31 day";
} elseif($a == 8){
    echo "<h1>MONTH</h1>";
    echo "Month of August have 31 day";
} elseif($a == 9){
    echo "<h1>MONTH</h1>";
    echo "Month of September have 30 day";
} elseif($a == 10){
    echo "<h1>MONTH</h1>";
    echo "Month of October have 31 day";
} elseif($a == 11){
    echo "<h1>MONTH</h1>";
    echo "Month of November have 30 day";
} elseif($a == 12){
    echo "<h1>MONTH</h1>";
    echo "Month of December have 31 day";
}else{

}    
?>


<?php
// Question No :4
// HCF and LCM of 2 number.

echo "<br>";
echo "<br>";
echo "<br>";



$x = 120;
$y = 123;

for($i = 1; $i < ($x+1); $i++) {
  if ($x%$i == 0 && $y%$i == 0)
    $hcf = $i;
}
echo "<h1>HCF</h1>";
echo "HCF of $x and $y is: $hcf";
 
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";



$x = 23;
$y = 25;


for($i = 1; $i < ($x+1); $i++) {
  if ($x%$i == 0 && $y%$i == 0)
    $lcm1 = $i;
}

$lcm = ($x*$y)/$lcm1;
echo "<h1>LCM</h1>";
echo "LCM of $x and $y is: $lcm";
?>

