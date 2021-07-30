<?php
/*
$this::this is refer to the currents scope of objects. hence $this os 
called as super refrence object .


Require of $this 
*/
class Test{
	public $x=100;  #instance variable
	public $y=200;
	public function setvalue($x,$y){   #formal argument
	$c=$x+$y;
   echo "The value from local variable x is= {$x} </br>";
   echo "The value from local variable y is= {$y} </br>";
   echo "The value from local variable c as sum is= {$c} </br>";
   echo "Now Accessing class level x and y variables.</br>";
   echo 'without $this </br>';
   
   echo (new Test())->x;
   echo (new Test())->y;
   echo '</br>';
   
   echo 'with $this </br>';
   echo $this->x;
   echo $this->y;
   echo '<hr/>';
   

	
	}
}

$obj=new Test;
$obj->setvalue(10,20);

#$x and $y are public
#Note:- $this can only used inside class scope only
#var_dump($obj); object of Test class
#$this=$obj;
#var_dump($this); out of context
echo '</br>';

echo "Accessing element outside class using object </br>";
echo $obj->x;
echo $obj->y;
?>