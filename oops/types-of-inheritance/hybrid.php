<?php
#Hybrid Inheritance:
/*

*/

class papa1{
	public function display1()
	{
		echo 'This is display1 Method from papa1</br>';
	}
}

class papa2{
	public function display2()
	{
		echo 'This is display2 Method from papa2</br>';
	}
}

class child extends papa1{  
 
	
}

$child=new child();
$child->display1();
?>