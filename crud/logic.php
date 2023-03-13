<?php
$a = array(100, 100, 100);

//calculating sum
print_r(array_sum($a));
echo "<bR>";
echo "<bR>";
echo "<bR>";
echo "<bR>";

?>

<!-- write a php program to check the number  
even or odd using function -->

<?php
$num = 15;
if ($num % 2 == 0) {
    echo "Odd Num :" . $num;
} else {
    echo "Even Num :" . $num;
}
echo "<bR>";
echo "<bR>";
echo "<bR>";
echo "<bR>";
?>

<!-- write a php program to check number Is
 prime or not  using function -->

<?php
$MyNum = 120;
$n = 0;

for ($i = 2; $i < $MyNum; $i++) {
    if ($MyNum % $i == 0) {
        $n++;
        break;
    }
}

if ($n == 0) {
    echo $MyNum . ": Is a prime number.";
} else {
    echo $MyNum . ": Is not a prime number.";
}
echo "<bR>";
echo "<bR>";
echo "<bR>";
echo "<bR>";
?>
<!-- 
write a php program to print table 
of a number using function
 -->

<?php
for ($i = 1; $i <= 10; $i++) {
    echo " 2 " . " x " . $i . " = " . $i * 2 . "<bR>";
}
echo "<bR>";
echo "<bR>";
echo "<bR>";
echo "<bR>";
?>



<!-- write a php program to print 1 to 50 all
  even numbers using function -->
<?php
$count = 0;
$num = 2;
while ($count < 500) {
    $div_count = 0;
    for ($i = 1; $i <= $num; $i++) {
        if (($num % $i) == 0) {
            $div_count++;
        }
    }
    if ($div_count < 0) {
        echo $num;
        $count = $count + 1;
    }
    $num = $num + 1;
}
echo "<bR>";
echo "<bR>";
echo "<bR>";
echo "<bR>";
?>

<?php

for ($a = 2; $a <= 100; $a++) {
    echo "Table of ". $a . "<br>";
    echo "<br>";
    for ($b = 1; $b <= 10; $b++) {
    echo $a . "x" . $b . "=" . ($a * $b)."<br>";    
    }
    echo "<br>";
}

?>