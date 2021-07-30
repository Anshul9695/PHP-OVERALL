<?php
$first_name =$_POST['fname'];
$last_name =$_POST['lname'];
$conn=mysqli_connect("localhost","root","","ajax_db")or die("Connection failled");


$sql="insert into students(first_name,last_name)values('{$first_name}','{$last_name}')";
$result=mysqli_query($conn,$sql) or die("sql query failed");


?>