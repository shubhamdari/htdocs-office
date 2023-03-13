<?php
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro($a,$b) ;
  public function baseTest(){
    echo "test";
  }
}

// Child classes
class Audi extends Car {
    public $one;
    public $two;
  public function intro($a,$b)  {
    $this->one= $a;
    $this->two = $b;
    return "Choose German quality! I'm an $this->one .$this->two!";
  }
}



// Create objects from the child classes
$audi = new audi("Audi");
$test = new Audi("test");
echo $test->intro(10,12);
echo $audi->intro(3,4);


$audi->baseTest();
echo "<br>";



?>