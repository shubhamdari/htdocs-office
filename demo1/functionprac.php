<?php
// normal function 
function sub(){
    echo "sub";
}
echo "<h1>Simple Function</h1>";
sub();

?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";

?>


<?php
// Function Default Arguments 

function prac($a,$b=10){
   echo  $a + $b;
//    echo  $result . "<br>"; 
}
echo "<h1>Defualt Function</h1>";
prac(10);
prac(10,20);

?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
// parameter function
function pre($p,$a){
    echo $p + $a;
}
echo "<h1>paramter Function</h1>";
pre(10,20);

?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
// return function 
function ret($a,$b){
    $result = $a + $b;
    return $result; 
}
echo "<h1>Return Function</h1>";
echo ret(10,200);
echo "<br>";
echo ret(10,2000);
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// Anonymous function
$a = function($s , $d){
    echo $s + $d;
};
echo "<h1>Anonymous function</h1>";
$a(10,20);
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// Recursive function
function recus($a){
    if($a <= 10){
       echo "2"."x"."$a"."=".(2*$a)."<br>";
        recus($a+1); // function calling it self
    }
}
echo "<h1>Recursive function</h1>";
recus(1);  // calling function


?>