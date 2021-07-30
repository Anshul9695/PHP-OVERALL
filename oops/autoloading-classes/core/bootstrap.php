<?php
spl_autoload_register(function ($classname)

{
$root=dirname(__DIR__);
$class_path="classes";
$path="{$root}/{$class_path}/{$classname}.class.php";
if(file_exists($path))
{
	include $path;
}	
else{
	die("Such class file dose not exit");
}

});
?>