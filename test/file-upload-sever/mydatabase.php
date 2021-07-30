<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn']) and !empty($_POST['btn']))
	{
		$name=isset($_POST['name'])?$_POST['name']:NULL;
		$email=isset($_POST['email'])?$_POST['email']:NULL;
		//
		
		//$sql="select*from tbl_ashu";
		$sql="insert into tbl_ashu(name,email)values('$name','$email')";
		$result_set=mysqli_query($con,$sql);
		@$count=mysqli_num_rows($result_set);
		if($count>0)
		{
		echo 'not inserted';	
		}
		else{
			echo 'record inserted';
		}
	}
	else{
		
	}
}
?>

<html>
<head>
</head>
<body>
<form action="<?php echo basename ($_SERVER['PHP_SELF']);?>" method="post">
Enter Name:<input type="text" name="name"></br></br>
Enter a Email:<input type="email" name="email"></br></br>

<input type="submit" name="btn"/>

</form>
</body>
</html>