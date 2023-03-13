<?php
for($i=1; $i<=5; $i++){ 
    for($j=4; $j>=$i; $j--){
     echo '&nbsp;&nbsp;'; 
    } 
    for($k=1; $k<=$i; $k++){ 
    echo '*'; 
    } 
    echo '<br>'; 
 } 

?>




<?php
for($i = 1; $i <= 5; $i++){
    for($j = 4; $j >= $i; $j--){
        echo "&nbsp;&nbsp;";
    }
    for($k = 1; $k <= $i; $k++){
        echo "*";
    }
    echo "<br>";
}
?>


<?php
for($i = 1; $i <= 5; $i++){
    for($j = 4; $j >= $i; $j--){
        echo "&nbsp;&nbsp;";
    }
    for($k = 1; $k <= $i; $k++){
        echo "$j";
    }
    echo "<br>";
}
?>









<?php
for ($i = 1; $i <= 5; $i++) { 
    for($j = 4; $j >= $i; $j--){
        echo "&nbsp;&nbsp;";
    }
    for($k = 1; $k <= $i; $k++){
        echo "$k";
    }
    echo "<br>";
}
?>






















