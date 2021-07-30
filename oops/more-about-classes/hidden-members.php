<?php
class Test{
	public $y=100;#inside class security
	private $z=200;
	protected $w=300;
	private $c;
	public function disp()
	{
		$x=10;
	$this->x= $x;#hidden member
	echo "The local value of x from disp {x}</br>";
	echo "The value of y {$this->y} </br>";
	echo "The value of y {$this->z} </br>";
	echo "The value of y {$this->w} </br>";
	echo "The value of c before ";
	var_dump($this->c);
	echo "</br>";
	$this->c=$x;
	
	echo "The value of c after ";
	var_dump($this->c);
	}
	public function disp2()
	{
		echo "The value of x from disp2 is {$x} </br>";
		echo "The value of x from disp2 is {$this->x} </br>";
		echo "The value of y {$this->y} </br>";
		echo "The value of c ";
		var_dump($this->c);
		
	}
}

$obj=new Test();
$obj->disp();
$obj->disp2();

?>