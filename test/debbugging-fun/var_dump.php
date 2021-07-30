<?php
#var_dump is used to perform postmortem of a variable datatype and is value  no of char inits  in its data value but things is should be string type.echo print,print_r no one can print
#var_dump can be used to print bollean false which 

#var_dump supported multi arguments
#var_dump(10,20,10);
#var_dump is not langauge construct parenthesis is mendatory
#var_dump can be used to print objects
$arr=array(10,"20",true,[10,20,30],10.5);

echo "<pre>";
var_dump($arr);
echo "</pre>";

$x=false;
echo $x;
var_dump($x);

class Test{
	public $a=10;
	public $b=30;
	public $c="apple";
}
$obj=new Test();
var_dump($obj);
?>
