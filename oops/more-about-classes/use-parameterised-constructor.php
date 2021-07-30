 <?php
 #Application of parameterised constructor
 #it is used to intialize the data member .
 #load some configuration....
 
 class Test{
	private $x;
   private $y;
private $z;
public function __construct($x,$y,$z)
{
	$this->x=$x;
	$this->y=$y;
	$this->z=$z;
	echo 'calling form inside class</br>';
	$this->getvalues();
}   

#getter for getting the value of x and y z

public function getvalues()
{
	echo "x is ={$this->x}";
	echo "y is ={$this->y}";
	echo "z is ={$this->z}</br>";
}
 }
 $obj=new Test(10,20,30);
 echo 'outside from class call</br>';
 $obj->getvalues();
 ?>
 
