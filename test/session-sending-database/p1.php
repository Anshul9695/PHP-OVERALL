<?php
@$name=$_POST['name'];
if(!empty($name))
{
	session_start();
	$_SESSION['ashu']=array(
	'name'=>$name
	
	);
	header("location:p2.php?_status=success");
}
?>
<html>
<head>
</head>
<body>
<form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
<input type="text" name="name"/>
<input type="submit" name="btn"/>
</form>
</body>
</html>