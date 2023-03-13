<?php
// 1) calculator 2,3 * --opps with constructor

class NumberCalculation{
public $numOne;
public $numTwo;

 function __construct($firstNum, $secNum ){
    $this->numOne = $firstNum;
    $this->numTwo = $secNum;

}
 function add(){
    return $this->numOne + $this->numTwo;
}
}
$result = new NumberCalculation(5,3203464);
echo $result->add();

?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
//2) Factorial of any number 5!= 5*4*3*2*1
class Factorial{
    public $a;
     function __construct($fact){
        $this->a = $fact;
     }
     function get_value(){
        $b  = 1;
       for($i = 1; $i <= $this->a;$i++){
           $b *= $i;
        }
        return $b;
     }
}
        $factor = new Factorial(5);
        echo $factor->get_value();
 
echo "<bR>";
?>


<?php
// 3) Retirement age=60
//  parent employee-- name, age, salary, address
//  child -- employeePensionInfo: retirement fund, retirement age
//  get all these info and display all imfo if age >55 
//  salray every year= 2000 increment




?>
