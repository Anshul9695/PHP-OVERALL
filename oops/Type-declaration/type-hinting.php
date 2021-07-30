<?php
/*
Type hinting:Is oops concept in which type Declaration result in use invalid use 
of arguments.
like in other programming language like java ,c,Type declaration is mendatory
but php being dynamicaly typed language type declaration is not mendatory

But After php 7+ version type Declaration is mendatory .
It used in case of debbuging.
*/

function test(array $arr)# Type Hinting
{
	foreach($arr as $index=>$value)
	{
		echo "index={$index} and value ={$value}</br>";
	}
}
test([10,20,30]);
test(['name'=>'awnish','class'=>'10th']);
test("This is string");

?>