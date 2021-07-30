<?php
include('database.php');
$obj=new query();

//select query
// $condition_arr=array('id'=>1);
// $result=$obj->getData('students','*',$condition_arr,'name','asc','1');
// insert a data
// $condition_arr=array('student_name'=>'Anshul','age'=>40,'city'=>'Banda');
// $result=$obj->insertData('students',$condition_arr);

// delete a data
//   $condition_arr=array('id'=>1);
//  $result=$obj->deleteData('tbl_user',$condition_arr);

 $condition_arr=array('student_name'=>'mohit','age'=>40,'city'=>'lucknow');
 $result=$obj->updateData('students',$condition_arr,'student_name','Rahul');

//echo '<pre>';
//print_r($result);


?>