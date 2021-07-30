<?php
#using singleton class
class Test{
	private static $object;
	private  function __construct()
	{
		echo 'Private constructer';
	}
	public static function createobject()
	{
		self::$object=new Test();
	}
	
	public static function getobject()
	{
		if(self::$object==NULL)
		{
			self::createobject();
		}
		else{
			return self::$object;
		}
	}
}
$single_obj=Test::getobject();#only single object
$single_obj=Test::getobject();
$single_obj=Test::getobject();
//$single_obj=Test::createobject();
//$single_obj=Test::createobject();

#output 
#private constructer 
#why static because static is object independent
#it is class level
#static memory allocation only take once

?>