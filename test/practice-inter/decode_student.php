<?php
$json_str=file_get_contents("student.json");
$json_arr=json_decode($json_str);

foreach($json_arr as $student):
 echo "<hr/>";
 echo "<b>Student data:</b>";
 echo "<hr/>";
	echo "student name:{$student->name}<br/>";
	echo "student class:{$student->class}<br/>";
	echo "student marks:{$student->marks}<br/>";
endforeach;	

?>