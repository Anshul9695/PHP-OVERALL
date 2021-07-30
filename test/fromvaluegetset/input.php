<?php
$name_error="";
$mobile_error="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn']) and !empty($_POST['btn']))
	{
		$name=isset($_POST['name'])?$_POST['name']:NULL;
		$mobile=isset($_POST['mobile'])?$_POST['mobile']:NULL;
		if(is_null($name)or empty($name))
		{
			$name_error="*name cannot be empty";
		}
		
		if(is_null($mobile)or empty($mobile))
		{
			$mobile_error="*mobile cannot be empty";
		}
		
		unset($_POST['btn']);
		$i=0;
		foreach($_POST as $key=>$value)
		{
			if(empty($value))
			{
				break;
			}
			$i++;
		}
		if($i==count($_POST))
		{
			echo 'form is submitted';
		}
		
	}
}
?>
<html>
<head>
<style>
.error{color:red;}
</style>
</head>
<body>
<h1>Form handling</h1>
<form action="<?php echo basename ($_SERVER['PHP_SELF']);?>" method="post">
<p>
Enter Full Name:<input type="text" name="name" value="<?php echo isset($name)?$name:"";?>"/>
<span class="error"><?php echo $name_error;?></span></br></br>
Mobile:<input type="text" name="mobile" value="<?php echo isset($mobile)?$mobile:"";?>"/>
<span class="error"><?php echo $mobile_error;?></span></br></br>
<input type="submit" name="btn"/>
</p>
</form>
</body>
</html>