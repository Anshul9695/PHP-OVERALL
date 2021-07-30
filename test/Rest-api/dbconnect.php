<?php
$host='localhost';
$user='root';
$pass='';
$dbname='rest_db';
$con=mysqli_connect($host,$user,$pass,$dbname)or die('connection error'.mysqli_connect_error($con));
#After Query Operation Close the Connection
// finally{ 	mysqli_close($con); }











