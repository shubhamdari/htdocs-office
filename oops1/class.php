<?php
class person
{
    public $firstname = "alex";
    public $age = 20;
    public $year = 2001;

    public function __construct()
    {
        $this->firstname;
        $this->age;
        $this->year;
    }
    public function getvalue()
    {
        return  $this->firstname . " " .  $this->age . " " . $this->year;
    }
}
$obj = new person();
echo $obj->getvalue();
?>




<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>




<?php
class Myclass
{
    public $name;
    public $age;
    function __construct($name1, $age1)
    {
        $this->name = $name1;
        $this->age = $age1;
    }
    function get_value()
    {
        return $this->name . $this->age;
    }
}
$obj = new Myclass('jain', 50);
$obj1 = new Myclass('amit ', 20);
$obj2 = new Myclass('kamal ', 25);

echo $obj->get_value();
echo "<br>";
echo $obj1->get_value();
echo "<br>";
echo $obj2->get_value();

?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>



<?php
class p_eron
{
    const AVG_LIFE_SPAIN = 80;
}
$obj = new p_eron();
echo $obj::AVG_LIFE_SPAIN;
?>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>



<?php
class car
{
    public $car_name;
    public $car1_name;

    public function __construct($car1, $car2)
    {
        $this->car_name = $car1;
        $this->car1_name = $car2;
    }
    public function  get_value()
    {
        return $this->car_name . $this->car1_name;
    }
}

class author extends car
{
    public function  get_value()
    {
        return $this->car_name . $this->car1_name;
    }
}

$obj = new car("audi ", "bmw");
echo $obj->get_value();
echo "<br>";
$obj1 = new author('swift ', 'alto');
echo $obj1->get_value();
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
class stati_c
{
    public static $firstname;
    public function __construct($name)
    {
        self::$firstname = $name;
    }
    public static function getvalue1()
    {
        return self::$firstname;
    }
}
$obj = new stati_c("php");
echo stati_c::getvalue1();
?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// class fruit
// {
//     public $name;
//     public $color;

//     function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function get_name()
//     {
//         return " Fruit Name :" . $this->name . "<br>" . "Color Name :" . $this->color;
//     }
// }

// $obj = new fruit("apple ", "red");

// echo $obj->get_name();
// echo "<br>";
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
// abstract class AbstractClass
// {
//     // Force Extending class to define this method
//     abstract protected function getValue();
//     abstract protected function prefixValue($prefix);

//     // Common method
//     public function printOut()
//     {
//         print $this->getValue() . "\n";
//     }
// }

// class ConcreteClass1 extends AbstractClass
// {
//     protected function getValue()
//     {
//         return "ConcreteClass1";
//     }

//     public function prefixValue($prefix)
//     {
//         return $prefix . "ConcreteClass1 <bR>";
//     }
// }

// class ConcreteClass2 extends AbstractClass
// {
//     public function getValue()
//     {
//         return "ConcreteClass2";
//     }

//     public function prefixValue($prefix)
//     {
//         return $prefix . "ConcreteClass2";
//     }
// }

// $class1 = new ConcreteClass1;
// $class1->printOut();
// echo $class1->prefixValue('FOO_') . "\n";

// $class2 = new ConcreteClass2;
// $class2->printOut();
// echo $class2->prefixValue('FOO_') . "\n";
?>

<?php
// echo "<br>";
// echo "<br>";
// echo "<br>";
?>


<?php

// Abstract class
abstract class Base
{
    abstract function printdata();
}
class Derived extends base
{
    function printdata()
    {
        echo "Derived class";
    }
}

$b1 = new Derived;
$b1->printdata();
?>

<?php
// echo "<br>";
// echo "<br>";
// echo "<br>";
?>

<?php

?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// class Fruit
// {
//     public $name;
//     public $color;

//     function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function __destruct()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }
// $apple = new Fruit("Apple", "red");
// echo "<br>";

?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
class test
{
    public $name = "jai";
    // public function __construct()
    // {

    // }
}
$obj23 = new test();
echo $obj23->name;
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// class per_son  
// {  
// public $name;  
// public $age;  
// function __construct($n, $a)  
// {  
// $this->name=$n;  
// $this->age=$a;  
// }  
// public function setAge($ag)  
// {  
// $this->ag=$ag;  
// }    
// public function display()  
// {  
// echo  "welcome ".$this->name."<br/>";   
// return $this->age-$this->ag;  
// }   
// }    
// $person=new per_son("sonoo",28);   
// $person->setAge(1);   
// echo "You are ".$person->display()." years old";    
?> 

<?php
echo "<br>";
echo "<br>";
?>

<?php

class bas_e
{
    final public function dis1()
    {
        echo "Base class..";
    }
}
class deri_ved extends bas_e
{
    public function dis_1()
    {
        echo "derived class";
    }
}
$obj = new deri_ved();
$obj->dis_1();

?>
