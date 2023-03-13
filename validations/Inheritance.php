<?php
// class a{
//     function fun1(){
//         echo "javatponit" . "<br>";
//     }
// }
// class b extends a{
//     function fun2(){
//         echo "SSSIT";
//     }
// }
// $obj = new a();
// $obj = new b();
// $obj->fun1();
// $obj->fun2();
?>

<?php
// echo "<br>";
// echo "<br>";
?>

 <?php
    class employee{
        public $name;
        public $age;
        public $salary;
        function __construct($n , $a , $s){
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }
        function info(){
            echo "<h1>Employee</h1>";
            echo "employee Name : " . $this->name . "<br>";
            echo "employee age : " . $this->age . "<br>";
            echo "employee salary : " . $this->salary . "<br>";
        }
    }
    class manager extends employee{
        public $tc = 1000;
        public $phone = 600;
        public $totalsalary;
        function info(){
            $this->totalsalary = $this->salary + $this->tc + $this->phone;
            echo "<h1>Manager</h1>";
            echo "manager name : " . $this->name . "<br>";
            echo "manager age : " . $this->age . "<br>";
            echo "manager salary : " . $this->totalsalary . "<br>";
        }
        }

    $object = new employee("Ram" , 20 , 40000);
    $object1 = new manager("ajay" , 25 , 400000);
    $object->info();
    $object1->info();
 ?>
  

<?php
echo "<br>";
echo "<br>";
?>




<?php
class fruits{
    public $name;
    public $color;
    function __construct($f , $c){
        $this->name = $f;
        $this->color = $c;
    }
    function call(){
        echo "This is " . $this->name . " And color " . $this->color;
    }
}
class fruit_s extends fruits{
   function __construct(){
    echo "Nice Work" . "<br>";
   }
}

$set = new fruits('Apple' , 'Red');
$set1 = new fruit_s();
 $set->call();
//  $set1->called();
?>