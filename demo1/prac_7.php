
<?php
// 1 write a program to print 1 to 100 numbers without
//  using loop
$n = 1;
function number($n)
{
    if($n > 0)
    {
        number($n - 1);
        echo "$n<br>";
    }
}
number(100);
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
// 2 write a program to print  table  of number  without using 
// loop


function table($num){
    if($num <= 10){
        echo "2*$num".'='.($num*2)."<br>";
table($num+1);
    }
}
table(1);


?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
// 3. Write a php function to multiply all the numbers
//  of index array
$numbers = [2,3,4];
$sum = 1;
foreach($numbers as $value){
    $sum *= $value;
}
echo $sum;
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
// 4 . write a  php program to check prime number  using 
// function

?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php

// 6 write a php program to find greatest number from given
//  three numbers using function

        $a=30;
        $b=20;
        $c=10;
        if($a>$b && $a>$c){
            echo "$a Greater";
        }
        elseif($b>$a && $b>$c){
            echo "$b  Greater";
        }
        elseif($c>$b && $c>$b){
            echo "$c  Greater";
        }else{
            echo "Change the sequence";
        
        }
        
            

   ?>   
   
   <?php
echo "<br>";
echo "<br>";
echo "<br>";

?> 
 

<?php
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php

// 9 write a program to print all prime numbers between
//  1 to 100


for ($i = 2; $i <= 100; $i++)
{
    $flag=0;
    for ($j=2; $j<$i ; $j++) 
    { 
       $rem = $i%$j;
        if($rem== 0)
            $flag++;
    }        
        if($flag ==0)
        {
            echo $i ."<br>";
        }       
 
}
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";

?>


<?php
// 10 write a program to find array length
$array = array  ("adi","ajay","atul","mohan");
print count($array);
?>