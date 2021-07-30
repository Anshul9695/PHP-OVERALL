<?php
/*
getters:: Method used to get the value from instance variables
setters::Method use to set the  value from instance variable

getters:getsomething():return or may not return or echo
setters:setsomethings($arg1,$arg2.....)
*/

class Area{
	#Accordding to best degine pattern each and every instance variable
	#must be private
	
	private $x1;
	private $y1;
	
	#Setters
	public function setX($x){
		
	   	$this->x=$x;
	}
	 public function setY($y)
	 {
		$this->y=$y; 
	 }
	 
	 #Getter
	 	public function getX(){
		
	   echo	$this->x;
	}
	 public function getY()
	 {
	echo	$this->y; 
	 }
	 
}

#object making
$obj=new Area();
#$obj->x; #cannot acces private property Area
#$obj->y; #cannot acces private property Area

#$obj->getX();
#$obj->getY();

$obj->setX(10);
$obj->setY(20);

$obj->getX();
$obj->getY();

?>