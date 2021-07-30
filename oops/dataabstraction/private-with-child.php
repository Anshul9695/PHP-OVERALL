<?php
class test{
	private $x=100;
	private function display()
	{
		echo 'The display function from test</br>';
	}
	public function hi()
	{
		echo 'hii public function</br>';
	}
}
#class child
class child extends test{
	private $y=100;
	private function hello()
	{
		echo 'Hello from child</br>';
	}
	public function __construct()
	{
		echo 'Hello from the child constructer</br>'; 
		#calling hello
		echo $this->hello();#private of child
	    #calling private $y
		echo $this->y;
		echo '</br>';
		#Accessing from child 
		$this->hi();#public will run
		#echo $this->x; private Accessbility
		#$this->display(); context error  
		
	}
}

#object
$child =new child();
#Accessing child private member from outside
#$child->hello(); fatal error
#$child->y;

?>