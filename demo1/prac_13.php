<?php
// 1) 1 to 5 print
for($i = 1; $i < 5; $i++){
    echo $i . "<br/>";
}
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// 2) 50 to 1 print
for($i = 50; $i >= 1; $i--){
    echo $i  . "<br/>";
}
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// 3) 1 to 100 print
for($i = 1; $i <= 50; $i++){
    echo ($i*2) ."<br/>";
}
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// 4) 100 to 50 print
for($i = 20; $i >= 10; $i--){
    echo $i*5 . "<br/>";
}
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// 5) Number of element even , odd in array
$array = [1,2,3,4,5,6,10,15,20,54]; // even no = 2,4,6  odd no = 1,3,5
$num = 0;
for($i = 0; $i < count($array); $i++){
    if($array[$i] % 2 == 0){
        echo "Even : " . $array[$i] . "<br/>";
    }if($array[$i] % 2 != 0){
        echo "Odd : " . $array[$i] . "<br/>";
    }
}


?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// 6) Array search a particular elements. 

?>