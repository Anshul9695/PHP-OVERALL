<?php
#single Inheritance with no Relationship

class Papa{
	
	 public function car()
	 {
		 echo "Papa ki car</br>";
	 }
	
	
	public function truck()
	{ 
	echo "Papa ka truck</br>";
}}

class child{
	public function bike()
	{
		echo "Child ki bike </br>";
	}

	public function car()
	{
		echo "Child ki car </br>";
	}
	
	#we need to Add signature
	public function truck()
	{
		echo "Child ki Truck</br>";
	}
}

#main code
$papa=new Papa();
$papa->car();
$papa->truck();

#child object
$child=new Child();
$child->bike();

#child want to car
$child->car();
$child->truck();


#Problem 
/*
=>  Parent is not Parent he is evil 
=>  It seams child is not where related to parent
=> There is no Legal Relationship 
=>  Dry code Missing child is Implementing same signature of parent


*/
?>