<?php
$x = 50;
$y = 30;
$a = 3;
$z = 3;
echo"1.Airthematic Operators";
echo "<br>";
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $z ** $a;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";
echo "<br>";

echo"2.Assignment Operators";

$x = 100;
$y = 30;
$a = 50;
$z = 60;
$q = 45;
echo "<br>";
echo $x +=20;
echo "<br>";
echo $y -=30;
echo "<br>";
echo $a *=2;
echo "<br>";
echo $z /=20;
echo "<br>";
echo $q %=10;
echo "<br>";

echo "<br>";
echo "<br>";


echo"3.ComparisonOperators";

$x = "100";
$y = '100';
$a = 50;
$z = 60;
$q = 45;
echo "<br>";
var_dump ($x == $y);
echo "<br>";
var_dump ($x === $y);
echo "<br>";
var_dump ($x != $y);
echo "<br>";
var_dump ($z !== $a);
echo "<br>";
var_dump ($x > $y);
echo "<br>";
var_dump ($x < $y);

echo "<br>";
var_dump ($x <= $y);
echo "<br>";
var_dump ($x >= $y);
echo "<br>";
var_dump ($z <=> $a);
echo "<br>";
echo "<br>";
echo "<br>";

echo"4.Increment / Decrement Operators";
echo "<br>";

$x = 100;
echo ++$x;
echo "<br>";

$a = 200;
echo $a++;
echo "<br>";

$b = 300;
echo --$b;
echo "<br>";

$c = 400;
echo $c--;
echo "<br>";
echo "<br>";
echo "<br>";


echo "5. Logical Operators";

$x = 100;
$y = 30;
$a = 50;
$z = 60;
$q = 45;
echo "<br>";
var_dump ($x==100 && $y==50);
echo "<br>";
var_dump ($x==100 || $y==40);
echo "<br>";
var_dump ($x==20 xor $y==30);
echo "<br>";
var_dump ($z !== 20);
echo "<br>";
echo "<br>";
echo "<br>";


echo "6. String Operators";
echo "<br>";
$text1 = "Hello";
$text2 = " Bang!";
echo $text1 . $text2;
echo "<br>";
echo "<br>";

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;


?>

