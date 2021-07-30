<?php
define('MAX_SIZE',10);
function get_time($format)
{
	return date($format);
}
//echo MAX_SIZE;
echo "<hr/>";

echo "<hr/>";
class Test{
	private $maxsize=MAX_SIZE;
	private $timestamp;
	
	public function __construct($format)
	{
		$this->timestamp=get_time($format);
	}
	public function getsetting()
	{

		echo "{$this->maxsize}</br>";
				echo "{$this->timestamp}</br>";
	}
}
$obj=new Test("H-i-s");
$obj->getsetting();
?>