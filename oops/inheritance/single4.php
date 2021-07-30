<?php
class Child {
	public function sahara()
	{
		echo "beta bap ka sahara  hota h</br>";
	}
} 

class Papa extends child{
	public function help()
	{
		echo "Papa need to son help</br>";
	}
}

$obj=new papa();
$obj->sahara();
$obj->help();


?>