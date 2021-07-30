 <?php
 class test{
	private function  __construct()
	{
		echo 'hello';
	}
}
#$test=new test(); #you can not make private constructer 
#constructer should be always public.
#once you declare constructer to be private it scope destroyed
/*
we can use only static scope 
such type of class is called sigleton class which can have only one object 
This means can be only done by making constructer as private
for example database connection should be singleton only
=============================================================

singleton degine pattern using private constructer
*****************************************************
#Diagram:
  Noraml class :
     obj1  | obj2  | obj3  make infinite object make in normal class
	 
  singleton class :
    obj1  only one object creation in sigleton class using static method 
	 
	 

*/

 ?>