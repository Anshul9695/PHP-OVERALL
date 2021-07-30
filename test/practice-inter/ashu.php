<?php
$student=[
[
'name'=>"Ashutosh",
'class'=>"10th",
'status'=>true,

],
[
'name'=>"Vipin",
'class'=>"12th",
'status'=>false,
],
];

$json=json_encode(["student"=>$student],JSON_PRETTY_PRINT);
//echo $json;
$student_obj=json_decode($json);
//echo getType($student_obj);

$student=$student_obj->student;
$object=$student[0];
$name=$object->name;
$class=$object->class;
$status=$object->status;

echo "{$name}</br>";
echo "{$class}</br>";
echo "{$status}";

?>