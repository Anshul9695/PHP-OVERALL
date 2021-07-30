<?php
#How type Hinting is important in case oops
class A{
	public function __construct()
	{
		echo 'This is a contructer</br>';
	}
	public function show()
	{
		echo 'This is show from A</br>';
	}
}
class B{
	public function __construct()
	{
		echo 'This is B constructer</br>';
	}
		public function show()
	{
		echo 'This is show from B</br>';
	}
}
$obj=new A();
function driverB(B $obj)
{
	$obj->show();  #local scope
}
driverB($obj);
?>