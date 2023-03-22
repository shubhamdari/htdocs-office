


<?php
// 2)Find the minimum and maximum element in an array
$arr = array(50, 45, 20, 4, 5);
echo "Maximum array :" .  max($arr);
echo '<br>';
echo "Minimum array :" . min($arr);
?>




<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>




<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




for ($i = 9; $i >= 5; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo 5 * $j;
    }
    echo "<br>";
}

?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>



<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 1; $j < 5 - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k <= $i; $k++) {
        echo 9 - $k;
    }
    echo "<br>";
}
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
$arr = array(2, 3, 5, 4, 8, 1, 2);
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr) - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $tmp;
        }
    }
}
// echo "<pre>";
print_r($arr);
// echo "</pre>"
?>


<?php
// $arr = array(9, 5, 6, 4, 2, 1);
// for ($i = 0; $i < count($arr); $i++) {
//     for ($j = 0; $j < count($arr) - 1; $j++) {
//         if($arr[$j] > $arr[$j + 1]){
//             $tmps = $arr[$j];
//             $arr[$j] = $arr[$j + 1];
//             $arr[$j + 1] = $tmps;
//         }
//     }
// }
// echo "<pre>";
// print_r($arr);
// echo "</pre>";


$str = "abba";
echo strrev($str);
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= 5; $j++) {

        echo 5 * $j;
    }

    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<?php

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 6; $j >= $i; $j--) {
        echo $j;
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


for ($i = 6; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo '<br>';
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if (($i + $j) <= 5) {
            echo "&nbsp;&nbsp;";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$num = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num++;
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



for ($i = 1; $i <= 5; $i++) {
    for ($space = 1; $space <= 5 - ($i); $space++) {
        echo "&nbsp;&nbsp";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {

    for ($space = 1; $space <= 5 - $i; $space++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


for ($i = 0; $i <= 6; $i++) {
    for ($k = 0; $k <= ($i ** 2); $k++) {
        echo "*";
    }
    echo "<br>";
}



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




for ($i = 5; $i >= 1; $i--) {
    for ($space = 1; $space <= (5 - $i); $space++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$num = 1;
for ($i = 4; $i >= 1; $i--) {
    $var = ((($i) * ($i - 1)) / 2) + 1;
    for ($j = 0; $j < $i; $j++) {
        echo $j + $var;
        // echo $j;
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



for ($i = 1; $i <= 5; $i++) {
    for ($space = 1; $space <= 5 - $i; $space++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 5 - 1; $i >= 1; $i--) {
    for ($space = 1; $space <= 5 - $i; $space++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


for ($i = 1; $i <= 5; $i++) {
    echo "<br>";
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
}
for ($i = 4; $i >= 1; $i--) {
    echo "<br>";
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo chr($j + 42);
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


for ($i = 5; $i >= 1; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo chr($j + 65);
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo chr($i + 64);
    }
    echo "<bR>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




function checkPrime($num)
{
    if ($num == 1) return 0;
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) return 0;
    }
    return 1;
}
echo '<h2>Prime Numbers between 1 and 100</h2> ';
for ($num = 1; $num <= 100; $num++) {
    $flag = checkPrime($num);
    if ($flag == 1) {
        echo $num . " ";
    }
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// add all odd number between 1 to 20

// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
// for ($i = 1; $i < count($arr); $i++) {
//     if ($arr[$i] % 2 == 0) {
//         echo $arr[$i] . " ";
//     }
// }

for ($i = 1; $i <= 6; $i++) {
    for ($j = 6; $j >= $i; $j--) {
        echo $j;
    }
    echo "<br>";
}
?>

