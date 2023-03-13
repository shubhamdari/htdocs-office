<?php
// class ParentClass {
//   public $name;//prop
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro() { // member function
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// // Strawberry is inherited from Fruit
// class ChildClass extends ParentClass {
//   public function message() {
//     echo "Am I a fruit or a berry? ";
//   }
// }
// $child = new ChildClass("name", "color");
// $child->intro();
// echo "<br>";
// $child->message();




// class ParentClass {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   protected function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class ChildClass extends ParentClass {
//   public function message() {
//     echo "Am I a fruit or a berry? ";
//   }

// }

// // Try to call all three methods from outside class
// $child = new ChildClass("Strawberry", "red");  // OK. __construct() is public
// $child->message(); // OK. message() is public
// $child->intro(); // ERROR. intro() is protected


class ParentClass {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class ChildClass extends ParentClass {
  public function message() {
    echo "Am I a fruit or a berry? ";
    // Call protected method from within derived class - OK
    $this->intro();
  }
}

$child = new ChildClass("Strawberry", "red"); // OK. __construct() is public
$child->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
//$child->intro();
?>


