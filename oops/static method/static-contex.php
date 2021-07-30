<?php
#static context Example

class Test{
	public static $x=100;  #static no object possible
	public $y=10;  #non static object possible
	# proggramm cannot be define static construct it is not working with static.
	public    function __construct()
	{
		echo " constructor Running.......</br>";
		echo "The value of y is non static context= {$this->y}</br>";
	}
}
$obj=new Test();
echo Test::$x;  #using class name to accesse outside class in use to class name

#inside class accesee static member using self keyword self::method_name

?>