<?php

class addsum
{
    public $sum;
    public $sum1;
    public $sum2;

    public function __construct($a, $b)
    {
        $this->sum;
        $this->sum1 = $a;
        $this->sum2 = $b;
    }
    public function getvalue()
    {
        return $this->sum = $this->sum1 + $this->sum2;
    }
}
$obj = new addsum(5, 6);
echo $obj->getvalue();

?>