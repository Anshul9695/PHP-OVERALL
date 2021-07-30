<?php
define('BASE_PATH',dirname(__DIR__));

$backend_path = BASE_PATH.'/backend';
#echo $backend_path;

$class_path = $backend_path."/classes/";
#echo $class_path;

spl_autoload_register(function($classname){
global $class_path;
$file_path = $class_path."{$classname}.php";

if(!file_exists($file_path)){
	die("Such $classname Class Does not Exist");
}
require_once $file_path;
 
});

$form_data=[

	'name'=>'awnish',
	'email'=>'awi@gmail.com',
	

];

$query = new Query_builder();

#query->insert('tbl_user',$form_data);

#echo $query->run();

#$query->getColumns('tbl_user');
 #echo $query->last_query();
#method chaining performed
//last inserted id 
#print_r($query->last_id('tbl_user'));

print_r($query->fetch_records("Select * from tbl_user")->all());



