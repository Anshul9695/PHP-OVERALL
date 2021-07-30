<?php
include 'functions.php';
$email_error="";
$mobile_error="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn']) and !empty($_POST['btn']))
	{
	$email=isset($_POST['email'])?$_POST['email']:NULL;
	$mobile=isset($_POST['mobile'])?$_POST['mobile']:NULL;
	 $email=sanitise($email);
	 $mobile=sanitise($mobile);
	 if(is_null($email) or empty($email))
	 {
		$email_error="Email cannot blank"; 
	 }
	 elseif(!(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)))//email validation
				{
					$email_error="Invalid Email";
					
				}
	
	if(is_null($mobile) or empty($mobile))
	{
		$mobile_error="Mobile cannot be blank";
	}
	elseif(!(preg_match("/^[6-9]{1}[0-9]{9}$/",$mobile)))
	{
		$mobile_error="Invalid Mobile";
	}
      


	else
	{
	 echo $email;
	 echo $mobile;
	}
}


	

}
?>
<html>
<head>
<style>
.error{
	color:red;
}
.s{
	color:red;
}
</style>
</head>
<body>

<h1>Form validation</h1>
<hr/>
<form action="<?php echo basename ($_SERVER['PHP_SELF']);?>" method="post">
Enter Email:<input type="text" name="email" value="<?php echo isset($email)? $email:"";?>" /></br>

	<span class="error" id="spn-email"></span>
		<span class="s"><?php echo $email_error;?></span></br></br>

Enter your Mobile:<input type="text" name="mobile" value="<?php echo isset($mobile)? $mobile:"";?>"></br>

	<span class="error"></span>
		<span class="s"><?php echo $mobile_error;?></span></br></br>
<input type="submit" name="btn" value="submit"/>
</form>
</body>
</html>