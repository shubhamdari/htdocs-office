<?php declare(strict_types=1);
// How to make simple function 
    function name(){
        echo "Hello Worlds";
    }
    echo ve(10,50);
   echo "<br>";
    echo name();
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// parameter function 
function sum($a,$b){
    echo  $a + $b;
} 
    echo  sum(50,50);
    echo "<br>";
    echo  "1010 + 10 = " . up(1010,10);
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// functions with Returning Value
function ret($a,$b){
    $set = $a + $b; 
    return $set;
}
echo ret(10,10);
echo "<br>";
echo ret(20,10);

?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
function up($a,$b){
    $c = $a+$b;
    return $c;
}
echo  "Sum this no " . up(10,10);
?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// Anonymous function 
// 1 Anonymous function store in variable
$a = function(){
    echo "Anonymous function";
};
$a();
echo "<br>";
echo "<br>";
echo "<br>";
// 2 Anonymous function using parameter
$a = function($s ,$b){
    echo $s + $b;
};
$a(12,12)
?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";        
?>
<?php
// 3 Anonymous function using global variable

$y = 34; // global variable
$r = 10; // global variable
$a = function($p) use ($r){
    echo $r+$p;
};
$a($y);
?>
<br>
<?php
function hi(){
    echo "hello";
}
hi();
?>
<br>
<?php
function be($a,$b){
    echo $a+$b;
}
be(10,10);
?>


<br>
<?php
$a = function(){
    echo "hello world";
};
$a();
?>

<br>
<?php
function ve($a,$b){
    $c = $a+$b;
    return $c;
}
echo ve(10,50);
echo "<br>";
echo  "1010 + 10 = " . up(1010,10);
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";        
?>

<?php
function sub($a , $b){
    $mutlipy  = $a + $b;
    return $mutlipy . "<br>";
}
sub(10,20);
?>




