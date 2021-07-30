<?php
$json_str=file_get_contents("student2.json");
$json_arr=json_decode($json_str,true);


foreach($json_arr['student'] as $student):
 echo "<hr/>";
 echo "<b>Student data:</b>";
 echo "<hr/>";
 echo "student id:{$student['rollno']}<br/>";
	echo "student name:{$student['name']}<br/>";
	echo "student class:{$student['class']}<br/>";
	echo "student marks:{$student['marks']}<br/>";
endforeach;	

echo "<hr/>";

foreach($json_arr['student'] as $student):
if($student['rollno']==1001):
 echo "<hr/>";
 echo "<b>Student data:</b>";
 echo "<hr/>";
	echo "student name:{$student['name']}<br/>";
	echo "student class:{$student['class']}<br/>";
	echo "student marks:{$student['marks']}<br/>";
	endif;
endforeach;	