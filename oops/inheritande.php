<?php
class test
{
    public $name;
    public $age;
    public function __construct($fname, $age1)
    {
        $this->name = $fname;
        $this->age = $age1;
    }
    public function getvalue()
    {
        return "Name : " . $this->name . "<bR> " . "Age : " . $this->age;
    }
}

$obj = new test('ladi ji', 24);
echo $obj->getvalue();
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php

class cars
{
    public $firstcar;
    public $secondcar;
    public function __construct($carfir, $carsnd)
    {
        $this->firstcar = $carfir;
        $this->secondcar = $carsnd;
    }
}
class cars1 extends cars
{
    public function value()
    {
        return $this->firstcar . " " . $this->secondcar;
    }
}
$obj1 = new cars1('Audi', 'Bmw');
echo $obj1->value();
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
class good
{
    const SETVALUE = "GOOD BYE";
    function getvalue()
    {
        echo self::SETVALUE;
    }
}
echo good::SETVALUE;
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
abstract class welcome{
    public $name;
    function __construct($fname)
    {
        $this->name = $fname;
    }
    abstract function intero();
}
class welcome1 extends welcome{
    function intero()
    {
        return $this->name;
    }
}
$obj = new welcome1('Ladi ji');
echo $obj->intero();
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
class greeting {
    public static function welcome() {
        echo "Hello World!";
    }
}
// Call static method
greeting::welcome();
?>
