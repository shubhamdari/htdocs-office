<?php
class class_cont{
    public $car_name;
    public $car_name1;

    function __construct($car_name , $car_name1) 
    {
        $this->car_name = $car_name;
        $this->car_name1 = $car_name1;
    }
    function get_car_name()
    {
        return $this->car_name;
    }
    function get_car_name1()
    {
        return $this->car_name1;
    }
}
    $audi = new class_cont("Audi" , "Bmw");
    echo $audi->get_car_name();
    echo "<br>";
    echo $audi->get_car_name1();
?>

<?php 
echo "<br>";
?>


<?php
class fruit {
    public $fruit_name;
    function __construct($fruit_name) 
    {
        $this->fruit_name = $fruit_name;
    }
    function get_fruit_name() 
    {
        return $this->fruit_name;
    }
}
    $apple = new fruit("Apple");
    echo $apple->get_fruit_name();
?>