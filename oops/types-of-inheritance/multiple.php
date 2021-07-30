<?php
#Hybrid Inheritance:More than one parent
/*
more than 2 parent

Note := Php dose not support multiple inheritance nor hybrid inheritance.
*/

class papa1{
	public function display1()
	{
		echo 'This is display1 Method from papa1</br>';
	}
}

class papa2 {
	public function display2()
	{
		echo 'This is display2 Method from papa2</br>';
	}
}
class papa3{
	public function display3()
	{
		echo 'This is display3 Method from papa3</br>';
	}
}

class child extends papa1,papa2,papa3{   
 
	
}

$child=new child();
$child->display1();
?>