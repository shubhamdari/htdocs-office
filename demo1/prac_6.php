<?php
// question no : 1
$a = 1;
if($a == 1){
    echo "<h1>MONTH</h1>";
    echo "Month of January have 31 Days <br>";
    echo "Month of March have 31 day <br>";
    echo "Month of May have 31 day <br>";
    echo "Month of July have 31 day <br>";
    echo "Month of August have 31 day <br>";
    echo "Month of October have 31 day <br>";
    echo "Month of December have 31 day <br>";
}elseif($a == 2){
    echo "<h1>MONTH</h1>";
    echo "Month of february have 28 day <br>";
}elseif($a == 3){
    echo "<h1>MONTH</h1>";
    echo "Month of April have 30 day <br>";
    echo "Month of June have 30 day <br>";
    echo "Month of September have 30 day <br>";
    echo "Month of November have 30 day <br>";
} 
else{
    echo "Enter right month no";
}
?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";

// Question 2 : 1



for($row = 1; $row <= 5; $row++){
    for($col = 5; $col >= $row; $col--){
        echo "*";
    }
    echo "<br>"; 
}

?>