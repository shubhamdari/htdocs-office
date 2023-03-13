<?php
// Write a function to check whether a number is prime or not
// Note: A prime number (or a prime) is a natural number greater than 1
//  that has no positive divisors other than 1 and itself.
function prime($n){
    $n = 2;
   for($i = 1; $i <= 1;$i++){
    if($n % 2 == 0){
        echo "Prime Number : $n";
    }else{
        echo "Not prime Number : $n";
    }
}
}
prime("n");

?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//  Write a function to reverse a string. 
function rev(){
    echo strrev("Hello World!");
}
rev();
?>







<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

 // Write a function to sort an array -->
function arr(){
$numbers = array(2,5,8,6,7);
sort($numbers);
print_r($numbers);
}
arr();
?>







<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//  <!-- Write a PHP function that checks 
//  whether a string is all lowercase -->


function str(){
$str = "hello";
$newstr = ctype_lower($str);
var_dump($newstr);
echo "$newstr";
}
str();
?>




<?php
// Write a PHP function that checks whether a passed 
// string is a palindrome or not?
//  Note -A palindrome is a word, phrase, 
//  or sequence that reads the same backward as forward, e.g., madam 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




function par(){      
$a = "MadaM";
$rev = strrev($a);
if($a == $rev){
    echo "$a Palindrome";
}else{
    echo "$a is not palindrome";
}
}
par();
?>



























