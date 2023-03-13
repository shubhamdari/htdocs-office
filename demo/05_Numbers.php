<?php

$x = 5985;
echo 'variable is integer ? :';
var_dump(is_int($x));

echo "<br>";

$y = 59.85;
echo 'variable is integer ? :';
var_dump(is_int($y));

echo "<br>";

$z = 10.85;
echo 'variable is float? :';
var_dump(is_float($z));

echo "<br>";

$a = 1.9e411;
echo 'numeric is finite or infinite ? :';
var_dump($a);

echo "<br>";
// cast float to int
$q = 225.6585;
$int_cast = (int)$q;
echo $int_cast;

echo "<br>";
$r = "255858.7545";
$int_cast = (int)$r;
echo $int_cast;

echo "<br>";




?>