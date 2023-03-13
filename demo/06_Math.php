<?php


echo(pi());

echo "<br>";

echo(min(125, 254, 2558, 145, 255)."<br>");
echo(max(125, 254, 2558, 145, 255)."<br>");
echo "<br>";

echo(abs(-2.7));
echo "<br>";
echo(sqrt(64)."<br>");

echo(round(0.60));
echo "<br>";
echo(round(0.49));
echo "<br>";
echo(round(10,100));
echo "<br>";

define("cars",[
     "Alfa Romeo",
     "BMW",
     "Toyota"
]);
echo cars[1];


echo "<br>";
define ('DEMO','Welcome boss');
 function xy(){
    echo DEMO;
 }
    xy();


?>