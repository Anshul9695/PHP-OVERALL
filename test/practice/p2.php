<?php
class Test{

public $x=100;
public $y=200;

public function demo($x,$y)
{
 echo "inside function x value is={$x}";
 echo "inside function y value is={$y}</br>";

echo $this->x;
echo $this->y;
}



}
$obj=new Test();
$obj->demo(10,20);
?>