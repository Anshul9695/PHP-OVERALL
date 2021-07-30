<?php

#once object is created you can access the non static (context) members and members
#function.
class Student{

var $name='ravi';
var $myclass=12;	

function getname()
{
	echo $this->name;
}
function getclass()
{
echo $this->myclass;	
}

}

$std_obj=new Student();#obj=>Instant Refrence variabels to student object
#members variables::instance variabels
echo "The student Name is : $std_obj->name";
echo "The student Class is : $std_obj->myclass";
#members function  methods

echo '<hr/>';

echo "The student Name by fun = ";
echo  $std_obj->getname();
echo "</br>";
echo "The student Class by fun =";
 echo $std_obj->getclass();
 echo "</br>";
 echo "The Student name :{$std_obj->getname()} </br>";
 echo "The Student class :{$std_obj->getclass()}</br> ";










?>