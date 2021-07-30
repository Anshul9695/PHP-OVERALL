<?php
#instance of operator in class and object 
#instanceof operator is used to check weather a object is instance of
class Student{
	public $name='ravi';
	public $class='10th';
	
	public function display()
	{
		echo $this->name;
		echo $this->class;
	}
}
#making a object
$obj1=new Student();
$obj1->display();

echo '</br>';
$obj2=new Stdclass();
var_dump($obj2 instanceof Student);

echo '</br>';
$obj2=new Stdclass();
var_dump($obj1 instanceof Student);



?>