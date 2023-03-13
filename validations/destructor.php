<?php
// class Fruit {
//     public $name;
//     public $color;
  
//     function __construct($name) {
//       $this->name = $name;
//     }
//     function __destruct() {
//       echo "The fruit is {$this->name}.";
//     }
//   }
  
//   $apple = new Fruit("Apple");
?>





<?php  
    class demo{  
        public function demo(){  
            echo "constructor1...";  
        }  
    }  
    class demo1 extends demo{  
        public function __construct(){  
            echo parent::demo();  
            echo "constructor2...";  
        }  
        public function __destruct(){  
            echo "destroy.....";  
        }  
    }  
    $obj= new demo1();  
?>  