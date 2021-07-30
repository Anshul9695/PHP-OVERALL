<?php
#constructer ::These are just like class methods but they donot return 
#Anything are called at runtime as soon as class is intiated.
#constructer is a type of setter which is used to intitialised the data
#member of a class no matter weather they are private ,protected,or public.
#constracor are same as classname.with method as a signature.


class Test{
	public function __construct(){  #magic constant
	 
  echo "Hello consructor";	 
	}
	
	#public function Test()
	#{
	#	echo "Hello";
	#}
}
$obj1=new Test();

?>