<?php

//json Encode any object ---->Json object
//php array-->json_array
//exa:[10,20,30]--->[10,20,30]
//array(10,20,30)--->[10,20,30]
//php assocciative :key and value-->json_object
//Multidimmenssion Array-->Array_object

$student=[
[
'name'=>"Ashu",
'class'=>12,
'passed'=>true,
],
[
'name'=>"vipin",
'class'=>10,
'passed'=>true,
],

];

echo "<pre>";
print_r($student);
echo "</pre>";
echo "<hr/>";
#header("Content-Type:application/json");
$json= json_encode(["student"=>$student],JSON_PRETTY_PRINT);
echo $json;
echo "<hr/>";
echo getType($json);
echo "<hr/>";
echo $json->name;#not possible
#notice error

#we need to decode:Deserialization(json object==>php object)
$student_obj=json_decode($json);
echo "<hr/>";
echo getType($student_obj);
echo "<hr/>";

$student=$student_obj->student;
echo getType($student);
echo "<hr/>";
$object=$student[0];
echo "<hr/>";

$name=$object->name;
$class=$object->class;
$status=$object->passed;

echo "<hr/>";
echo "Name is:{$name}</br>";
echo "class is:{$class}</br>";
echo "status is:{$status}</br>";



?>