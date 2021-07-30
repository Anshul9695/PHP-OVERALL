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

class child extends /* is related to */ papa{
 public function bike()
 {
	 echo "child ki Bike</br>";
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
Is a Relationship :Means straight away Dependency child-parent Relationship 
1.child-parent (child extends parents) super class =parent sub class=child 
2.parent-child (parent extends child)  super class=child  sub class =parent

Syntex
----------
Left to Right A extends B
Relationship B----> A (Right to Left)  



*/
?>