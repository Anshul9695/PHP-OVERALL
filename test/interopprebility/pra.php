<?php
$str=file_get_contents("practice.json");
$str_obj=json_decode($str);
$str_arr=$str_obj->student;

foreach($str_arr as $student):

	echo "<hr/>";
	echo "Name is:{$student->name}<br/>";
	echo "class is:{$student->class}<br/>";
	echo "Status is:{$student->status}<br/>";
endforeach;
?>