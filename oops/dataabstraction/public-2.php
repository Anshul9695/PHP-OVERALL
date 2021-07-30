<?php
#without Inheritance public Accessbility
class Test{
	public $x=100;
	public $y=200;
	#scope public: within the class
	public function display()
	{
		#public :within the class
		//echo $this->x;
		//echo $this->y;
	}
	public function __construct()
	{
		#within the class
		$this->display();
		echo 'Access Inside Constructer</br>';
				echo $this->x;
		echo $this->y;
	}
}
#object
#public scope within the class 
$test=new Test();
echo '</hr>';

#Access public data member outside the class
echo "The value of x outside the class {$test->x}";
echo "The value of y outside the class {$test->y}";

#Access the public method outside the class
echo "calling public method outside the class";
echo $test->display();
#within the class and outside the class scope remains same.
?> 