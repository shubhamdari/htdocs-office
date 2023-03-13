
<!-- 1)count a total number of duplicate elements in an array

2)copy the elements of one array into another array

3)print all unique elements in an array.

4)count the frequency of each element of an array

5)find the maximum and minimum element in an array.

6)find the third largest element in an array

7)find sum of right diagonals of a matrix

8)Find a pair with given sum in the array

9)find the two repeating elements in a given array

10)move all zeroes to the end of a given array. -->



<?php









echo "<br>";
echo "<br>";
echo "<br>";

echo "<pre>";
print_r(array_count_values($arr));
echo "</pre>";
?>





























<?php
// <!--1. count a total number of duplicate elements in an array

// 2. copy the elements of one array into another array
//     print all unique elements in an array.

//  3. count the frequency of each element of an array
//     find the maximum and minimum element in an array.
//  4. find the third largest element in an array in php

//  5. find sum of right diagonals of a matrix in php

//  6. Find a pair with given sum in the array in php

//  7.  find the two repeating elements in a given array
//    move all zeroes to the end of a given array. -->
?>

<?php
//1  count a total number of duplicate elements in an array

// $arr = [1,1,1,2,3,3,3,1];
// echo "<pre>";
// print_r(array_count_values($arr));
// echo "</pre>";
?>


<?php
// echo "<br>";
// echo "<br>";
// echo "<br>";
?>



<?php
//  2. copy  elements of one array into another array
//      print all unique elements in an array in php.

     $array1 = array(1, 2, 3, 4, 5);
     $array2 = [];
     
     foreach ($array1 as $value) {
         $array2[] = $value;
     }
     
     print_r($array2);

?>

<?php
// echo "<br>";
// echo "<br>";
// echo "<br>";
?>









<?php
//  3. count the frequency of each element of an array
//     find the maximum and minimum element in an array.

$array = array(1, 2, 3, 4, 5, 1, 2, 3);

$max = $array[0];
$min = $array[0];
for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $max) {
        $max = $array[$i];
    }
    if ($array[$i] < $min) {
        $min = $array[$i];
    }
}

echo "Maximum element: $max<br>";
echo "Minimum element: $min<br>";
?>




<?php
// echo "<br>";
// echo "<br>";
// echo "<br>";
?>







<?php
//  4. find the third largest element in an array in php
// $array = array(1, 2, 3, 4, 5);

// for ($i = 0; $i < count($array); $i++) {
//     for ($j = $i + 1; $j < count($array); $j++) {
//         if ($array[$j] > $array[$i]) {
//             $a = $array[$i];
//             $array[$i] = $array[$j];
//             $array[$j] = $a;
//         }
//     }
// }

// $largest = $array[2];

// echo "Third largest element: $largest<br>";
?>

<?php
// echo "<br>";
// echo "<br>";
// echo "<br>";
?>






