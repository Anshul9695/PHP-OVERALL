<?php
/*
Types of constructor in PHP
Construtor are two types
1.Parameterised Construtor=class will be parameterised 
$obj=new classname();  paranthesis is mendatory.

2.Non Parameterised Construtor 
$obj=new classname; Paranthesis is not mendatory.

In parameterised Construtor we pass Arguments(supply)

In non parameterised Construtor we do Any Task without Parameterised 
you can utilise(use) the parameterised but not supply.

*/

class Test{
	private $x;
	private $y;
	public function __construct()
	{
		$this->x=10;
		$this->y=20;
		display();#outer function
		echo '</br>';
		$this->display();
	}
	public function display()
	{
		echo "X ={$this->x}";
		echo "y ={$this->y}";
	}
}
$obj=new Test();#non parameterised constructor 

 function display()
{
	echo 'outer display function call';
}
?>