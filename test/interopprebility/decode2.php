<?php
$teacher=[
[
'name'=>"Awnish",
'class'=>10,
'status'=>true,
],
[
'name'=>"Ramesh",
'class'=>12,
'status'=>true,
],

];
$json=json_encode(['teacher'=>$teacher],JSON_PRETTY_PRINT);
$teacher_obj=json_decode($json);
$teacher=$teacher_obj->teacher;

$object=$teacher[0];


$name=$object->name;
$class=$object->class;
$status=$object->status;

echo "<hr/>";
echo "Name is:{$name}</br>";
echo "class is:{$class}</br>";
echo "status is:{$status}</br>";





?>