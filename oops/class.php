<?php
#class files are core files
class Student{
//Data member/states/attribute/variables/instant variables/instant
var $name;#undefined
var $myclass;	
//member function/methods/behaviours/action
//dafault Accese modifire method
function getname($name)// $name is formal argument of method getname
{
	echo $this->name;
}
function getclass($myclass)//$class is formal argument of method getname
{
echo $this->myclass;	
}

}
#$this is non-mangled super global variables and it is pointer
#since class till now have not got any memory allocation hence class is a logical entity
#where is object gets memory allocation in heap and its signature is given stack
#hence object is a physical entity.
#instantiatiating class
#$x=data type is a variables
#---->stack
#Initialization stack 
#var_dump($x);
#$x=new classname() $s=>objects------>heap
#same case valid pointers
#$x=10;
#if memory Assignned
#$x=&10 #pointer
#var $name; stack
#var $myclass

#Garbage collection :: Responsible for Assignned null  to undefined variables

var_dump((new Student() )->name);
#       <--Heap------->
#Anonymous variables =object
#using object you can access any member and any method under its scope(context)
echo '<hr/>';
var_dump((new Student()));
var_dump((new Student())->name);
echo '<hr/>';
#Refrence Variable =named object
$obj=new Student();
var_dump($obj);
var_dump($obj->name);




?>