<?php
#you cannot Return From Constructor
class Test{
	public function __construct(){
		#Adding Return in construct
		echo "I am a Constructor";
		$x=100;
		return $x; #no Return Possible
	}
	
	public function getvalue()
	{
		return 10;
	}
}
$obj=new Test();
//$obj1=new Test();
echo $obj->__construct();#wrong(illegell method call constuctor we are not use)
echo $obj->getvalue();
?>