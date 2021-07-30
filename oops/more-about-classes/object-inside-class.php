<?php
/*
=>Object creation Inside a class .
=>Instance within the class .
*/
class Papa{
	private $balance=100;
	public function car()
	{
		echo "This car is papa</br>";
	}
	
	public function BankBalance()
	{
		echo "Get the money";
		echo "{$this->balance}</br>";
	}
	
	public function setBalance($money)
	{
		$this->balance=$this->balance+$money;
	}
}
class Son{
	public function Bike()
	{
		echo "This is Bike of Son</br>";
	}
	
	public function getDependency()
	{
		$a=10;#local variable
		$papa=new Papa();#local variable holding Instance(object)of  papa class
		
		$papa->bankbalance();
		$papa->setBalance(-500);
		$papa->bankbalance();
		#print_r(get_class_vars());
	}
	
	public function __destruct()
	{
		echo "<hr/>Descrutor call";
		var_dump($papa);
	}
}

#object level-1 this is independent
$papa=new Papa();
$papa->car();
$papa->bankbalance();


#object level-2 This is Also Independent
$son=new Son();
$son->bike();

#$son ->bankbalance();

#if you want to achive dependency in of the class
#you have Two option
#Go for Inheritence
#Dependency Injection

$son->getDependency();
?>