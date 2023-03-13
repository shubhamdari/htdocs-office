<?php
echo "<h1>Classes and Objects</h1>";
class person
{
    public $name;
    public $last;

    public function __construct($fname, $lname)
    {
        $this->name = $fname;
        $this->last = $lname;
    }
    public function getvalue()
    {
        return $this->name . $this->last;
    }
}
$obj = new person('foot', 'ball');
echo $obj->getvalue();

?>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
echo "<h1>Constants</h1>";
class set
{
    const SET_NAME = 'hello world';
}
$obj = new set();
echo $obj::SET_NAME;
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
echo "<h1>Static</h1>";
class stati_c
{
    static public $name;
    public function __construct($f_name)
    {
        self::$name = $f_name;
    }
    public function get_value()
    {
        return self::$name;
    }
}
$obj = new stati_c('alex');
echo $obj::get_value();

?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
echo "<h1> Inheritance</h1>";
class inher
{
    public $gmail;
    public function __construct($f_gmail)
    {
        $this->gmail = $f_gmail;
    }
    public function getvalue1()
    {
        return $this->gmail;
    }
}
class anthor extends inher
{
    function getvalue1()
    {
        return $this->gmail;
    }
}
$obj = new inher('inher@gamil.com');
echo $obj->getvalue1();
echo "<br>";
$obj1 = new anthor('anthor@gmail.com');
echo $obj1->getvalue1();
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
echo "<h1>Constructor</h1>";
class constr
{
    public $name;
    public function __construct($F_name)
    {
        $this->name = $F_name;
    }
    public function getvalue()
    {
        return $this->name;
    }
}
$obj = new constr('atul');
echo $obj->getvalue();

?>
