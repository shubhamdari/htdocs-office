<?php
// 1)count a total number of duplicate elements in an array

$array = array(10, 20, 1 ,25 ,1, 10, 30 ,25, 10);
$counter = 0;
$array_size=count($array);

for($i = 1; $i <= $array_size; $i++){
    for($j = ($i+1); $j < $array_size; $j++){
        if($array[$i] == $array[$j]){
            $counter++;
            break;
        }
    }
   
}
echo "Duplicate elements in an array : ".$counter;
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>








<?php
// 2)copy the elements of one array into another array.

$array1 = array(1, 2, 3, 4, 5);
$array2 = [];

foreach ($array1 as $value) {
    $array2[] = $value;
}

print_r($array2);

?>





<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
<?php
// 3)print all unique elements in an array.










?>
<?php
// 4)count the frequency of each element of an array







?>
<?php
// 5)find the maximum and minimum element in an array.

$array = array(1,20,12,5,4,9);

$max = $array[0];
$min = $array[0];

for($i = 1; $i < count($array); $i++){
    if($array[$i] > $max){
        $max = $array[$i];
    }if($array[$i] < $min){
        $min = $array[$i];
    }
}
echo "Maximum : " . $max;
echo "<br>";
echo "Minimum : " . $min;






?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>










<?php
// 6)find the third largest element in an array
$num = [10,50,1,2,5,20]; 
$count = [];
for ($i=0; $i < count($num); $i++) {
    for($j = ($i+1); $j < count($num); $j++){
        if($num[$i] > $num[$j]){
            $a = $num[$i];
            $num[$i] = $num[$j];
            $num[$j] = $a;
        }
    }
}
$a = $num[4];
echo "largest element in an array : ".$a;





?>
<?php
// 7)Find a pair with given sum in the array



?>
<?php
// 8)find the two repeating elements in a given array
?>
<?php
// 9)move all zeroes to the end of a given array.
?>



