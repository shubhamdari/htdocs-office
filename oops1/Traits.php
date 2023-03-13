<?php
trait test
{
    public $sum;
    public $sum1;
    public $add;
    public function getvalue($num, $num1)
    {
        $this->add;
        $this->sum = $num;
        $this->sum1 = $num1;
        return $this->add = $this->sum + $this->sum1;
    }
}
class a
{
    use test;
}
class b
{
    use test;
}
class c
{
    use test;
}
class d
{
    use test;
}
// $obj = new a();
// $obj = new b();
// $obj = new c();
$obj = new d();

echo $obj->getvalue(1, 2);
echo "<br>";
echo $obj->getvalue(100, 200);
echo "<br>";
echo $obj->getvalue(100, 20);
?>