<?php

#once object is created you can access the non static (context) members and members
#function.
class Student{

#var $name='ravi'; #default=>public
#var $myclass=12;	#default=>public

private $name='ravi';
private $myclass=12;
function getname()
{
	echo $this->name;
}
function getclass()
{
echo $this->myclass;	
}
function setname($name)
{
echo	$this->name=$name;
	
}
}


$std_obj=new Student();
//echo "The student Name by fun = ";
//echo  $std_obj->getname();
echo "</br>";
//echo "The student Class by fun =";
 //echo $std_obj->getclass();
 $std_obj->setname("Ashutosh");
?>