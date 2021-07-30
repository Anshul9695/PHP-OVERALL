<?php
$json_str=file_get_contents("student2.json");
$json_obj=json_decode($json_str);

$json_arr=$json_obj->student;
foreach($json_arr as $student):
 echo "<hr/>";
 echo "<b>Student data:</b>";
 echo "<hr/>";
	echo "student name:{$student->name}<br/>";
	echo "student class:{$student->class}<br/>";
	echo "student marks:{$student->marks}<br/>";
endforeach;	

echo "<hr/>";
echo "Q1:find the particular value in json rollno";

foreach($json_arr as $student):
if($student->rollno==1001):

 echo "<hr/>";
 echo "<b>Student data:</b>";
 echo "<hr/>";
 echo "student id:{$student->rollno}<br/>";
	echo "student name:{$student->name}<br/>";
	echo "student class:{$student->class}<br/>";
	echo "student marks:{$student->marks}<br/>";
	endif;
endforeach;

echo "<hr/>";
	
	
	echo "Q1:update the particular value in json name";

foreach($json_arr as $student):
if($student->rollno==1001):
$student->name="Akash";

 echo "<hr/>";
 echo "<b>Student data:</b>";
 echo "<hr/>";
 echo "student id:{$student->rollno}<br/>";
	echo "student name:{$student->name}<br/>";
	echo "student class:{$student->class}<br/>";
	echo "student marks:{$student->marks}<br/>";
	endif;
endforeach;
?>