<?php
class Fruit
{
  // Properties
  public $name;
  public $color;
  // Methods
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
class demo
{
  public function demo()
  {
    echo "constructor1...";
  }
}
class demo1 extends demo
{
  public function __construct()
  {
    echo parent::demo();
    echo "constructor2...";
  }
  public function __destruct()
  {
    echo "destroy.....";
  }
}
$obj = new demo1();
?>

<?php
echo "<br>";
?>

<?php
class cls1
{
}
$obj = new cls1();
echo get_class($obj);
?> 

<?php
class person
{
  public static $fname;
  public function  __construct($name)
  {
    self::$fname = $name;
  }
  public function valu1()
  {
    return self::$fname;
  }
}
$obj = new person('ladi ji');
echo person::valu1();
?>