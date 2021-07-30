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
?> 