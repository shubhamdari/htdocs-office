<?php
class access{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
    function call(){
        echo "your name : " . $this->name . "<bR>";
    }
}

$modifer = new access('Yahoo baba');
echo $modifer->call();

?>