<?php
/*
Destructor:This is method which is called as soon as the excecution of class is done.
Destructor is used to delete the object at Run time if required
Destructor or consructor both are independent of signature level 
constuctor and destructer both are magic function.
Destructor will only Run After Each  excecution has been completed.

Signature level:-Sequence at which you define a method is called signature level
By Default signature level of consructor is 1
BY Default signature level of Destructor is n.
*/


class Test{
	
	public function __construct(){  #magic function
	 
  echo "Hello consructor </br>";	 
	}
	public function display()
	{
		echo "Method call</br>";
	}
	 
	 
	public function __destruct()
	{
		echo "i am destructer";
	}
	
}
$obj1=new Test();
$obj1->display();
?>