<?php
$student=[
	[
     'name'=>'Ashu',
     'class'=>'12th',
     'status'=>true,
	],

	[
		'name'=>'Devi',
		'class'=>'10th',
		'status'=>true,
	],

];
$json=json_encode(['student'=>$student],JSON_PRETTY_PRINT);
$student_obj=json_decode($json);
$student=$student_obj->student;
$object=$student[0];

$name=$object->name;
$class=$object->class;
$status=$object->status;

echo "<hr/>";
echo "Name is:{$name}</br>";
echo "class is:{$class}</br>";
echo "status is:{$status}</br>";


?>