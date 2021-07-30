<?php
class Test{
private static $x;


	#non static 
	public function display()
	{
		echo "Access the static variable x is non static method</br>";
	}
	#static 
	public static function display2()
	{
		echo "Access the static variable x in static method</br>";
	}
	
	public function display3()
	{
		echo "Non static context from display3</br>";
	}
}


#main code 
Test::display(); #outside the class non static context
   #can be Access using static context deprecated
Test::display2();#static context for static method valid .
Test::display3();#deprecated should be non static context
$test=new Test(); #valid for object non static context
$test->display3();
$test->display2();#valid for static and non static context for object.
?>