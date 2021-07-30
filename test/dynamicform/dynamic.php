<?php
$name_error="";
$mobile_error="";
$email_error="";
$select_error="";
$gender_error="";
$checkbox_error="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn']) and !empty($_POST['btn']))
	{
		$name=isset($_POST['name'])?$_POST['name']:NULL;
		$mobile=isset($_POST['mobile'])?$_POST['mobile']:NULL;
		$email=isset($_POST['email'])?$_POST['email']:NULL;
		$city=isset($_POST['city'])?$_POST['city']:NULL;
		$gender=isset($_POST['gender'])?$_POST['gender']:NULL;
		$checkbox=isset($_POST['hobbies'])?$_POST['hobbies']:NULL;
		if(is_null($name) or empty($name))    //name validation start
		{
			$name_error="Name can not be empty";
		}
		else{
			if(!(preg_match("/^[a-zA-Z ]+$/",$name)))
	{
		$name_error="Invalid Name";
	}
	else
	{
		echo $name;
	}
		}//name validation end
		
		//mobile validation start
		if(is_null($mobile) or empty($mobile))
		{
			$mobile_error="Mobile can not be empty";
		}
		else
		{
			if(!(preg_match("/^[6-9]{1}[0-9]{9}$/",$mobile)))
			{
			$mobile_error="Invalid Mobile";
			}
			else{
				echo $mobile;
			}
		}//mobile validation is end
		
		if(is_null($email) or empty($email))
		{
			$email_error="Email Can Not Be Empty";
		}
		else//email validation is start
		{
             if(!(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)))
				{
					$email_error="Invalid Email";
				}
				else{
					echo $email;
				}
		}//email validation is end
		if(is_null($city) or empty($city))
		{
			$select_error="Please Select City Feild";
		}
		else
		{
		echo $city;	
		}
		if(is_null($gender) or empty($gender))
		{
			$gender_error="Please Select Radio Button";
		}
		else{
			echo $gender;
		}
		
		if(is_null($checkbox) or empty($checkbox))
		{
			$checkbox_error="Please Select Checkbox";
		}
		else
		{
			print_r ($checkbox);
		}
	}
}

?>
<html>
<head>
<style>.s{color:red;} body{background:aqua;}</style>
</head>
<body>
<form action="<?php echo basename ($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<legend>User Info Form</legend>
Name:<input type="text" name="name" value="<?php echo isset($name)?$name:"";?>">
<span class="s"><?php echo $name_error;?></span></br></br>

Mobile:<input type="text" name="mobile" value="<?php echo isset($mobile)?$mobile:"";?>">
<span class="s"><?php echo $mobile_error;?></span></br></br>

Email:<input type="text" name="email" value="<?php echo isset($email)?$email:"";?>">
<span class="s"><?php echo $email_error;?></span></br></br>


<select name="city">
<option value="" <?php if($city=='select'){echo "selected";}?>>--select City--</option>
<option value="Delhi"  <?php if($city=='Delhi'){echo "selected";}?>>Delhi</option>
<option value="Hydrabad" <?php if($city=='Hydrabad'){echo "selected";}?>>Hydrabad</option>
<option value="Bengluru" <?php if($city=='Bengluru'){echo "selected";}?>>Bengluru</option>
<option value="Noida" <?php if($city=='Noida'){echo "selected";}?>>Noida</option>
</select>
<span class="s"><?php echo $select_error;?></span></br></br>


Select Gender:
<input type="radio" name="gender" value="Male"<?php if($gender=="Male"){echo "checked";}?>/>Male
<input type="radio" name="gender" value="female"<?php if($gender=="female"){echo "checked";}?>/>Female
<input type="radio" name="gender" value="Other"<?php if($gender=="Other"){echo "checked";}?>/>Other
<span class="s"><?php echo $gender_error;?></span></br></br>

Select Hobbies:
<?php $hobbies_arr=['Singing','Dancing','Coocking','Playing'];?>
<?php foreach($hobbies_arr as $index=>$value){ ?>
<input type="checkbox" value="<?php echo $value;?>"name="hobbies[]"/><?php echo $value;?>
<?php } ?>
<span class="s"><?php echo $checkbox_error;?></span></br></br>
<input type="submit" name="btn"/>
</fieldset>
</form>
</body>
</html>