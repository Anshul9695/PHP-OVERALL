<?php
#php object with stdclass

$studentobj=new Stdclass();
$studentobj->name='Awnish';
$studentobj->newclass="10th";
$studentobj->marks=107;
$studentobj->passed=true;
$studentobj->email="vikasmishra.cicst@gmail.com";

//encode into json
header("Content-Type:application/json");
$json=json_encode($studentobj,JSON_PRETTY_PRINT);
//used to write complete data at once
$data=file_put_contents("output.json",$json);
var_dump($data);

?>