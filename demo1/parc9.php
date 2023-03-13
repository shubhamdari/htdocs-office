<?php
// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 
// on one line. There will be no hyphen(-) at starting and 
// ending position


for($i = 1; $i <= 10; $i++){
    if($i < 10){
        echo "$i-";
    }else{
        echo $i;
    }
}
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>




<?php
// 2. Create a script using a for loop to add
//  all the integers between 0 and 30 and display the total


for($i = 0;$i <= 30;$i++){
    echo "$i<br>";
}
?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>




<?php
// 3. Create a script to construct the following pattern,
//  using nested for loop

for($row = 1;$row <= 5;$row++){
    for($col = 1; $col <= $row; $col++){
        echo "*";
    }
    echo "<bR>";
}

?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>



<?php
// 4. Create a script to construct the following
//  pattern, using a nested for loop.
$x = 5;
for($row = 1;$row <= $x;$row++){
    for($col = 1; $col <= $row; $col++){
        echo "*";
    }
    echo "<br>";
}
for($row = $x; $row >= 1; $row--){
    for($col = 1; $col <= $row; $col++){
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

?>




<?php


for($a=0; $a< 10; $a++)
 { 
   for($b=0; $b< 10; $b++)
      {
	     echo $a.$b.",";
      }
      echo("<br>");
}

?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php

// Write a PHP script that creates the following table
// (use for loops)


echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> <br>";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> ";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";




?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>



<?php
// echo "<table border=1  cellpadding=3px and cellspacing=0px>";
// 	for($a = 1; $a <= 6; $a++){
//         echo "<tr>";
//         for($b = 1; $b <= 5; $b++){
//             echo "<td>". $a."x".$a."=".($a*$b). "</td>";
//         } 
//         echo "</tr>";
//     }

?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
<?php
$n = 5 ;
for($i = 1; $i <= $n; $i++){
    for($j = 1;$j <= $n;$j++){
        if($i == 1 || $i == $n){
            echo "*";
        }else{
            if($j == 1 || $j == $n){
                echo "*";
            }else{
                echo "&nbsp;&nbsp;&nbsp";
            }
        }
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
$n =10;
for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $n; $j++){
        if($i == 1 || $i == $n){
            echo "*";
        }else{
            if($j == 1 || $j == $n){
                echo "*";
            }else{
                echo "&nbsp;&nbsp;&nbsp";
            }
        }
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
     if ($column == 1 or (($row == 0 or $row == 7)
      and ($column > 1 and $column < 6)) or 
      ($row == 3 and $column > 1 and $column < 7))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "<br>";
}
?>

