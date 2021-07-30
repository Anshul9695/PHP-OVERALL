<?php
$json_str=file_get_contents("output.json");
$json_obj=json_decode($json_str);
$student_arr=$json_obj->Student;

foreach($student_arr as $stu):
 echo "<hr/>";
 echo "<b>Student data:</b>";
 echo "<hr/>";
	echo "student name:{$stu->name}<br/>";
	echo "student class:{$stu->class}<br/>";
	echo "student marks:{$stu->status}<br/>";
endforeach;	

?>