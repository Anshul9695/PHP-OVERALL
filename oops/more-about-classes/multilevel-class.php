<?php
/*
single level class:-A PHP script with single declare class is called 
single level class
Multi level class:- A php script with multiple declare class is called 
{Multi level class}


*/
#first level class
class Test1{
	public function display1()
	{
		echo "Namo narayan".__CLASS__."form method".__METHOD__."and function is".__FUNCTION__;
	}
	
	
}
#Second level class
class Test2{
		public function display2()
	{
		echo "Namo vishnu".__CLASS__."form method".__METHOD__."and function is".__FUNCTION__;
	}
}
#main driver class
$test1=new Test1();
$test1->display1();

echo '<hr/>';

$test2=new Test2();
$test2->display2();

?>