<?php
class Prac2 {
  public $name;
  public $color;

  function __construct($nameVal, $colorVal) {
    $this->name = $nameVal;
    $this->color = $colorVal;
  }
  function get_name() {
    echo $this->name;
  }
  function get_color() {
    echo  $this->color;
  }
}

$apple = new Prac2("Apple", "red");
$apple->get_name();
echo "<br>";
 $apple->get_color();
 
?>