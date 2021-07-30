<?php
#static method from outside class
#if object level =constructor
         
		 #non static method will Run
#if class level =can run before constructor
class Test{
	#static context
	public static function run()
	{
		echo "This is static Run function.......... </br>";
	}
    #	constructor
	public function __construct()
	{
		echo "I am a constructor....</br>";
	}
	
	#non static context
	public function sayHello()
	{
		echo "Hello from Non static context</br>";
	}
}
#main driver code
Test::run(); #will RUn first
#self::run(); will not run error scope can not find in outside class
$obj=new Test();
$obj->sayHello();  #non static method
?>