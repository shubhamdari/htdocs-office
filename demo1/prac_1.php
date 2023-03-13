<?php
    $name = "rahul";
    $age = "21";
    echo "My name is $name and age is $age ."
?>

<?php
echo "<br>";

    $a = 3;
    if($a % 2 == 0){
        echo "number is even";
    }else{
        echo "number is odd";
    }

?>

<?php
    echo "<br>";
  
    $a = 1;
    while($a <= 50){
        echo "$a<br>";
        $a++;
    }    
?>

<?php
    echo "<br>";
    $a = 1;
    while($a <= 10){
        echo "Hello World<br>";
        $a++;
    }    
    

?>
<?php
    echo "<br>";
    $a = 1;
    for($a = 2; $a <= 10; $a++){
        for($b = 1; $b <=10 ; $b++){
             echo $a * $b."<br>"; 
        }
    }
?>

<?php
    echo "<br>";
    $a = 1;
    do{
        echo "Hello worlds <br>";
        $a++;
    }while($a <= 10)
?>