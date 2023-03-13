<?php
interface Area
{
    public function calcArea();
}
class Circl_e implements Area
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calcArea()
    {
        return $this->radius * $this->radius * pi();
    }
}
class Rectangle implements Area
{
    private $width;
    private $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calcArea()
    {
        return $this->width * $this->height;
    }
}
$mycirc = new Circl_e(3);
$myrect = new Rectangle(3, 4);
echo "the area of circle is ";
echo $mycirc->calcArea();
echo "<br>";
echo "the area of rectangle is ";
echo $myrect->calcArea();
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<!-- Array ( ) -->
<!DOCTYPE html>
<html>

<body>

    <?php
            // class to show run time polymorphism  
            class new_Shape
            // parent class to draw differeent shapes  
            {
                function draw()
                {
                }
            }
            // class Circle to draw a circle  
            class Circle extends new_Shape
            {
                function draw()
                {
                    print " the function executed properly and 
            Circle has been drawn . </br> ";
                }
            }
            // class triangle to draw a triangle  
            class Triangle extends new_Shape
            {
                function draw()
                {
                    print " the function executed properly and
             Triangle has been drawn . </br> ";
                }
            }
            // class Square to draw a square  
            class Square extends new_Shape
            {
                function draw()
                {
                    print "the function executed properly and 
            Square has been drawn . ";
                }
            }

            $Val = array(2);

            $Val[0] = new Circle();
            $Val[1] = new Triangle();
            $Val[3] = new Square();

            for ($i = 0; $i < 3; $i++) {
                $Val[$i]->draw();
            }
            ?>
</body>

</html>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php

// namespace Htm_l;

// class Table
// {
//     public $title = "";
//     public $numRows = 0;
//     public function message()
//     {
//         echo "<p>Table '{$this->title}' has {$this->numRows}
//          rows.</p>";
//     }
// }
// $table = new Table();
// $table->title = "My table";
// $table->numRows = 5;
// ?>

<!DOCTYPE html>
<html>

<body>
<?php
//     $table->message();
?>
<?php
//     class a
//     {
//         function fun1()
//         {
//             echo "javatpoint";
//         }
//     }
//     class b extends a
//     {
//         function fun2()
//         {
//             echo "SSSIT";
//         }
//     }
//     $obj = new b();
//     $obj->fun1();
?>




<?php
echo "<br>";
echo "<br>";
?>
<?php  
    class demo  
    {  
        public function display()  
        {  
            echo "example of inheritance  ";  
        }     
    }  
    class demo1 extends demo  
    {  
        public function view()  
        {  
            echo "in php";  
        }     
    }  
    $obj= new demo1();  
    $obj->display();  
    $obj->view();  
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php

?>