<?php
$arr = [0, 6, 5, 6, 48, 15];
$biggestNumber = $arr[0];
foreach ($arr as $value) {
    if ($value > $biggestNumber) {
        $biggestNumber = $value;
    }
}
echo $biggestNumber;
echo "<br>";
echo "<br>";
echo "<br>";

?>
<?php
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
}
?>