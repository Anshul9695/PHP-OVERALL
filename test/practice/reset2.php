<?php
$submit=false;
$name_error="";
$mobile_error="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn']) and !empty($_POST['btn']))
	{
		$name=isset($_POST['name'])?$_POST['name']:NULL;
		$mobile=isset($_POST['mobile'])?$_POST['mobile']:NULL;
		if(is_null($name) or empty($name))
		{
			$name_error="*name cannot be blank";
		}
		if(is_null($mobile) or empty($mobile))
		{
		$mobile_error="*mobile cannot be blank";	
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
			$submit=true;
		echo" form is submitted";
		}
	}
}
?>
<html>
<head>
<style>.error{color:red;}</style>
</head>
<body>
<form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
Name:<input type="text" class="input" name="name" value="<?php echo isset($name)?$name:"";?>">
<span class="error"><?php echo $name_error;?></span></br></br>
Mobile:<input type="text" class="input" name="mobile" value="<?php echo isset($mobile)?$mobile:"";?>">
<span class="error"><?php echo $mobile_error;?></span></br></br>
<input type="submit" name="btn" value="submit"/>
</form>
<?php if($submit==true){?>
<script>
var classelement=document.getElementsByClassName('input');
for(var i=0;i<classelement.length;i++)
{
	classelement[i].value="";
}
</script>
<?php }?>
</body>
</html>