<?php
// question NO - 1
//  Program to print weekday based on given number.



//Alogrithm 
// step 1 using a variable using h1 HTML tag for styling .
// step 2 using nested condition .
// step 3 using  Comparison Operators .
// step 4 using echo for weekday .


$a = 5;
if($a == 1){
    echo "<h1>DAY OF THE WEEK</h1>";
    echo "Today is monday";
}
elseif($a == 2){
    echo "<h1>DAY OF THE WEEK</h1>";
    echo "Today is tuesday";
}
elseif($a == 3){
    echo "<h1>DAY OF THE WEEK</h1>";
    echo "Today is wedenday";
}
elseif($a == 4){
    echo "<h1>DAY OF THE WEEK</h1>";
    echo "Today is thuesday";
}
elseif($a == 5){
    echo "<h1>DAY OF THE WEEK</h1>";
    echo "Today is friday";
}
elseif($a == 6){
    echo "<h1>DAY OF THE WEEK</h1>";
    echo "Today is saturday";
}
elseif($a == 7){
    echo "<h1>DAY OF THE WEEK</h1>";
    echo "Today is sunday";
}
else{
    echo "Enter a right day";
}
?>









<?php
echo "<bR>";
echo "<bR>";
echo "<bR>";
echo "<bR>";
// question NO - 2
//  Program which display the grade of student using else if ladder −
//  Total marks= sum of all number / total no of subjcet
//   if Total marks are greater than 80 student belongs to A grade
//   if Total marks are greater than 70 and less than 80 student belongs to B grade
//   if Total marks are greater than 60 and less than 70 student belongs to C grade
//   if Total marks are greater than 50 and less than 60 student belongs to D grade
//   if Total marks are greater than 40 and less than 50 student belongs to E grade
//   if Total marks are less than 40 Grade F(Fail)


//Alogrithm 
// step 1 using variable and using h1 HTML tag for styling.
// step 2 using  Comparison Operators . 
// step 3 using if condition .
// step 4 using echo for Student Grade ans.



$a = 100;
if($a >= 80 && $a <= 100){
    echo "<h1>STUDENT RESULT</h1>";
    echo "grade A";
}
elseif($a >= 70 && $a <= 80){
    echo "<h1>STUDENT RESULT</h1>";
    echo "grade B";
}
elseif($a >= 60 && $a <= 70){
    echo "<h1>STUDENT RESULT</h1>";
    echo "grade C";
}
elseif($a >= 50 && $a <= 60){
    echo "<h1>STUDENT RESULT</h1>";
    echo "grade D";
}
elseif($a >= 40 && $a <= 50){
    echo "<h1>STUDENT RESULT</h1>";
    echo "grade E";
}
else{
    echo "<h1>STUDENT RESULT</h1>";
    echo "Fail";
}

?>




<?php

echo "<bR>";
echo "<bR>";
echo "<bR>";
echo "<bR>";
// question NO - 3
// Wap to make a calculator 
// if operator is + then + two operand
// if operator is - them - two operand
// if operator is  then  two operand
// if operator is ? then % two number

//Alogrithm 
// step 1 using variable $sum1 and $num2 and $operater , $result .
// step 2 using h1 HTML tag for styling .
// step 3 using Arithmetic Operators .
// step 4 using echo print for Calculator ans .

$sun1 = 10;
$num2 = 20;
$operater = '%';
if($operater == '+'){
    $result = $sun1 + $num2;
    echo "<h1>CALCULATOR</h1>";
    //echo $result; 
}
elseif($operater == '-'){
    $result = $sun1 - $num2;
    echo "<h1>CALCULATOR</h1>";
    //echo $result;
}
elseif($operater == '/'){
    $result = $sun1 / $num2;
    echo "<h1>CALCULATOR</h1>";
    //echo $result;
}
elseif($operater == '*'){
    $result = $sun1 * $num2;
    echo "<h1>CALCULATOR</h1>";
    //echo $result;
}
elseif($operater == '%'){
    $result = $num2 % $sun1;
    echo "<h1>CALCULATOR</h1>";
    //echo $result;
}
 echo $result;

?>




<?php
echo "<bR>";
echo "<bR>";
echo "<bR>";
echo "<bR>";

// 4 Wap to prepare a electric city bill
//  Consumer name
//  Consumer Address
//  Unit Consumed
//  if unit Consuled is less tham 100 them unit price will be 5 rupeed
// if unit conumed is greater than 100 and less than 200 than unit price will be 7 rupees
// if unit conumed is greater tham 200 and less than 300 unit price will be 11 rupees
// if unit price greater tham 300 unit price will be 15 rupees

//Alogrithm
// step 1 Using 6 variable in this Program .
// step 2 Using if Elseif condition .
// step 3 Using Arithmetic Operators and Comparison operators .
// step 4 Using H1 HTML tag for Styling .
// step 5 Using echo for electric city bill .


$name = "Adi";
$name1 = "Atul";
$name2 = "Jai";
$name3 = "Ajay";
$address = "delhi";
$a = 0;
$unit = 1000;
if($unit < 100){
    echo "<h1>ELECTRIC BILL </h1>";
    echo "$name price will be 5 rupees";
}
elseif($unit > 100 && $unit <= 200){
    echo "<h1>ELECTRIC BILL </h1>";
    echo "$name1 unit price will be 7 rupees";
}
elseif($unit >= 200 && $unit <= 300){
    echo "<h1>ELECTRIC BILL </h1>";
    echo "$name2 price will be 11 rupees";
}
elseif($unit > 300){
    echo "<h1>ELECTRIC BILL </h1>";
    echo "$name3 unit price will be 15 rupees";
}
?>
