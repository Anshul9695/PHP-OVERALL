<?php
#php object with stdclass

$studentobj=new Stdclass();
$studentobj->name='Ashu';
$studentobj->newclass="12th";
$studentobj->marks=97;
$studentobj->passed=true;
$studentobj->email="ashutoshmishra.cicst@gmail.com";

//encode into json
header("Content-Type:application/json");
$json=json_encode($studentobj,JSON_PRETTY_PRINT);
$fp=fopen("output.json","w");
if($fp==NULL)
{
	die("cannot proccess the File");
}
else
{
	//write the data
	fwrite($fp,$json);
	fclose($fp);
}
?>