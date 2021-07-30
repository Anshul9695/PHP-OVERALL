 <?php
@$mobile=$_POST['mobile'];
session_start();
$session=$_SESSION['ashu'];
$name=$session['name'];
if(!empty($name) and !empty($mobile))
{
	$con=mysqli_connect("localhost","root","", "practice_db")or die("connection error");
	$sql="insert into tbl_vishal (name,mobile) values('$name','$mobile')";
	$result_set=mysqli_query($con,$sql);
	
}


?>
<html>
<head>
</head>
<body>
<form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
<input type="text" name="mobile"/>
<input type="submit" name="btn"/>
</form>
</body>
</html>