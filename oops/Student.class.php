<?php
#class files are core files
#parameterised class is in which we passed parameter in this case paranthessis mendatory.
# non parameterised class is in which we dont passed parameter hence paranthessis are
#not mendatory.
class Student{

var $name;
var $myclass;	

function getname($name)
{
	echo $this->name;
}
function getclass($myclass)
{
echo $this->myclass;	
}

}

$std_obj=new Student();#parameterised class to project level
var_dump($std_obj);
echo '<hr/>';


$std_obj=new Student;#non parameterised class to object level
var_dump($std_obj);
echo '<hr/>';

$std_obj=new student();#parameterised class to object level
var_dump($std_obj);
echo '<hr/>';

$std_obj=new StUDent();#parameterised class to object level
var_dump($std_obj);
echo '<hr/>';

#class name instiantiation is not case senstive








?>