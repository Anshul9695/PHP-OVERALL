<?php
/*
Multi level class means Inheritance at difference level of class 
minimum level should be 3 level

*/
#level-1
class Dada{
	public function property()
	{
		echo 'This is property from dada</br>';
	}
	
}


#level-2
class Papa extends Dada{
	public function flat()
	{
		echo 'This is flat of papa</br>';
	
	}
}

class Child extends Papa
{
	public function bike()
	{
		echo 'child bike is calling</br>';
	}
}

#level-3
$child=new Child();
$child->flat();
$child->bike();
$child->property();
;
?>