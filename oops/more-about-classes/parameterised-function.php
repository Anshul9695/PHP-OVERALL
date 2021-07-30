<?php
#parametersised constructor
class Test{
  
    public function __construct($a,$b) #formal agrument must be passed to make constructor
	{
		#to be parametersised.
		echo "a=  {$a}";
		echo "b=  {$b}";
	     
	}
  
}
#now class will also be parametersised.
$obj=new Test(1,2);
?>