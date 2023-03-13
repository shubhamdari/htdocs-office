<?php
// class and object
class car{
  public $car_name;
  function car_name_set($car_name){
    $this->car_name = $car_name;
  }
  function car_name_get(){
    return $this->car_name;
    }
}

$audi = new car();
$bmw = new car();

$audi->car_name_set('Audi');
$bmw->car_name_set('Bmw');

echo $audi->car_name_get();
echo "<br>";
echo $bmw->car_name_get();

?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// construct
class fruit{
  public $fir_fruit;
  public $sec_fruit;
  function __construct($fir_fruit , $sec_fruit){
    $this->fir_fruit = $fir_fruit;
    $this->sec_fruit = $sec_fruit;
  }
  function get_fir_name(){
    return $this->fir_fruit;
  }
  function get_sec_name(){
    return $this->sec_fruit;
  }
}
$apple = new fruit("apple" , "banana");
echo $apple->get_fir_name();
echo "<br>";
echo $apple->get_sec_name();

?>
