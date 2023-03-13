<?php
class PracConstructor {
  public $name;// data member
  public $color; // or properties

  function __construct($nameval) {
    $this->name = $nameval;
    echo $this->name;
  }

  function get_name() {
   echo $this->name;
  }
  
}

$obj = new PracConstructor("test"); // new opertor is used to create an object
$obj1 = new PracConstructor("test123");
$obj2 = new PracConstructor("rohit test"); // new opertor is used to create an object
 // new opertor is used to create an object
//$obj1->get_name();



?>