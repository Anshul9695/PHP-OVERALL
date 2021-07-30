<?php
#Achive Method Overloading using __call  __callstatic() 
class Shape{
	public function __construct()
	{
     echo 'This is Example of method overloading</br>';		
}

public function __call($functionname,$argument)
{
	switch(count($argument)):
	case 1:
	echo PI()*$argument[0]*$argument[0]."</br>";
	break;
	
		case 2:
	echo  $argument[0]*$argument[1]."</br>";
	break;
	
	
		case 3:
	echo  $argument[0]*$argument[0]*$argument[2]."</br>";
	break;
	
	default:
	echo "Area of Method</br>";
	break;
	endswitch;
}
}

#Driver code
$shape=new Shape();
$shape->area();  
$shape->area(10);  
$shape->area(10,20);  
$shape->area(10,20,30);  
?>