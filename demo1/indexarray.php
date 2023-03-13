<?php

$color = array("Red","Blue","Black");
echo "<h1>Indexed Array</h1>";
foreach($color as $value){
    echo $value."&nbsp";
}
echo "<br>";
echo "<br>";
echo "<br>";

$age = ["adi"=>25,"golu"=>20,"ajay"=>24];
echo "<h1>Associative Array</h1>";
foreach ($age as $key => $value) {
    echo "<ul type=disc>";
    echo  "<li> $key = $value</li>";
    echo "</ul>";
}

echo "<br>";
echo "<br>";
echo "<br>";


$emp = [
    [1,"Krishana","Manager",50000],
    [2,"Salman","Salesman",40000],
    [3,"Mohan","Computer Operator",30000],
    [4,"Amir","Driver",10000]
]; 
echo "<h1>Multidimensional Array</h1>";
  echo "<table border=2  cellpadding='5' sellspacing='0'   bgcolor='lightgrey'>";
for($i = 0; $i < 4;$i++){
    echo "<tr>";
    for($c = 0; $c < 4;$c++){
        echo "<td>".$emp[$i][$c]."</td>";
    } 
    echo "</tr>";
}
echo "</table>";



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>


<?php
// echo "cookie name : " $_COOKIE[$cookie_name];
?>
<!--1. count a total number of duplicate elements in an array
2. copy the elements of one array into another array
    print all unique elements in an array.
3. count the frequency of each element of an array
   find the maximum and minimum element in an array.
4. find the third largest element in an array
5. find sum of right diagonals of a matrix
6. Find a pair with given sum in the array
7. find the two repeating elements in a given array
   move all zeroes to the end of a given array. -->
