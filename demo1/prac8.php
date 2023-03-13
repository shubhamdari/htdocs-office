<?php
// 1 write a program to sum index value of elements
//  and print new index array example 
// $arr = [1,2,3,4];
// output
// $new_arr = [1,3,5,7]


$arr = [1, 2, 3, 4];
$output = [];

for ($i = 0; $i < count($arr); $i++) {
    $output[] = $arr[$i] + $i;
}

print_r($output);

?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>



<?php
// 2. write a program to count how many
//  times foreach loops run
$numbers = array(1,2,3,4,5);
$count = 0;
foreach($numbers as $value){
    $count++;
}
echo  "Count : $value";

?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// 3.write a program to find all even numbers of index array 
$numbers = array(1,2,3,4,5,6);
$sum = 2;
foreach($numbers as $value){
    if($value % $sum==0){
        echo "EVEN: $value<br>";
    }
}
?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// 4. write a program to sum all odd numbers of index array

$num = array(1,2,3,4,5,6,8,10);
$sum = 0;
foreach ($num as $value) {
    if($value % 2 != 0){
        $sum += $value;
    }
}
echo $sum;
?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// 5. write a program to check how many numbers greater than 10 
// example
// $arr = [10,11,1,5,67,3,5]
// output = [10,11,67]
$arr = [10,11,1,5,67,3,5];
foreach($arr as $value){
    if($value >= 10){
        print_r($value);
    }
}

?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>





<?php
// 6. write a program to append 1 to 100 numbers 
//  in index array (you can use array functions)
$number = range(1,100);
echo "<pre>";
print_r($number);
echo "</pre>";
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// 7. write a program to print sequence , 1,4,7,10,13,16,19


$num = array(1,4,7,10,13,16,19);
for($i = 0; $i < count($num); $i++){ // 0 to 6 
    for($j = 0; $j < count($num)-1; $j++){ // 0 to 5
        
    }
}
print_r($num);






?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>
<?php

// 8. write a program to print 10 to 1 numbers
for($i = 10; $i >= 1; $i--){
    echo $i. "<br>";
}
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// 9 write a program to check number is prime or not
$p = 4;
$z = 0;
for($i = 2 ;$i < $p; $i++){
    if($p % $i ==  0){
        $z++;
       break;
    }
}
if($z == 0){
    echo "$p is prime";
}else{
    echo "$p is not prime";
}
?>



<br>


