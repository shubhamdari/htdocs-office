<?php 
// class class_objects{
// }

// ?>



<?php
// class fruit{
//     // properties
//     public $name;
     
//     // method 
//     function set_name($name){
//         $this->name = $name;
//     }

//     function get_name(){
//         return $this->name;
//     }

// }

?>



<?php
// class create
class fruit{
    // properties
    public $name ;

    // method
    function name_set($name){
        $this->name = $name;
    }
    function name_get(){
        return $this->name;
    }
}
// object create
$apple = new fruit();
$banana = new fruit();
$apple->name_set('apple');
$banana->name_set('banana');

echo $apple->name_get();
echo "<br>";
echo $banana->name_get();


?>


<?php
echo "<bR>";
?>


<?php
// class car{
//     public $car; // properties

//     // Method
//     function name_car($car){
//         $this->car = $car;
//     }
//     function car_get(){
//         return $this->car;
//     }
// }

// $audi = new car();
// $bmw = new car();
// $audi->name_car('audi');
// $bmw->name_car('bmw');

// echo $audi->car_get();
// echo "<br>";
// echo $bmw->car_get();
?>


<?php
echo "<bR>";
?>

<?php
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
$audi->car_name_set("Audi");
$bmw->car_name_set("bmw");

echo $audi->car_name_get() ."<br>";
echo $bmw->car_name_get();



?>
