<?php
//1.
$sum = 0;
for($i=0; $i<=30 ; $i++){
    $sum += $i;
}
echo "The sum of all integers lies within 0-30 = " .$sum ;

echo "<br>";
echo "<br>";

//2.

$grade= 70;

if($grade >= 90 && $grade <= 100 ){
    echo "Excellent";
}
elseif($grade >= 80 && $grade <= 89 ){
    echo "Very Good";
}
elseif($grade >= 60 && $grade <= 79 ){
    echo "Good";
}
elseif($grade >= 50 && $grade <= 59 ){
    echo "Average";
}
elseif($grade >= 40 && $grade <= 49 ){
    echo "Poor";
}else{
    echo "You Failed";
}

echo "<br>";
echo "<br>";

//3. write a program to fimd the largest of three numbers.
   
$a = 30;
$b = 20;
$c = 10;

if($a > $b && $a > $c){
    echo "largest number is a = ".$a;
}
elseif($b > $a && $b > $c){
    echo "largest number is b = ".$b;
}
elseif($c > $a && $c > $b){
    echo "largest number is c = ".$c;
}
else{
    echo "all numbers are equal";
}
echo "<br>";
echo "<br>";
//4. write a program to check whether an alphabet is a vowel or consonant
$A ="r";
if($A== 'a'||$A== 'e'||$A== 'i'||$A== 'o'||$A== 'u' ){
   echo " $A is vowel ";
}else{
    echo "$A is consonant";
}
echo "<br>";
echo "<br>";

//5. write a program to display cube of an integer
$a = 2;
echo $a*$a*$a;
echo "<br>";
echo "<br>";

// 6. 
 $num = 345;
 $sum = 0;
 $rem = 0;

 for ($i=0 ;$i<=strlen($num) ; $i++){
    $rem = $num%10;
    $sum = $sum + $rem;
    $num = $num/10 ;
 }
 echo "Sum of digits 345 is ".$sum;

?>


