<?php
include('database.php');
$obj=new query();
//print_r($_POST);
if(isset($_POST['submit']))
{
	$name=$obj->get_safe_str($_POST['name']);
	$age=$obj->get_safe_str($_POST['age']);
	$city=$obj->get_safe_str($_POST['city']);
	$condition_arr=array('student_name'=>$name,'age'=>$age,'city'=>$city);
$result=$obj->insertData('tbl_user',$condition_arr);
 
//header('location:user.php');
echo "<script>";
echo "window.location.href='user.php'";
echo "</script>";

}

?>


  


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/style-float.css"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="container">
	
		<div class="row py-3">
			<div class="col-sm-6">
				<form action="user.php" method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text"  name="name"class="form-control form-control-sm"/>
				</div>
								<div class="form-group">
					<label>Age</label>
					<input type="text" value="" name="age" class="form-control"  />
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="text" name="city" class="form-control"/>
				
				</div>
				
				<div class="form-group"><input type="submit" value="Add-User" name="Submit" class="btn btn-primary"></div>		
				</form>
			</div>

</div>
</div>
</body>
</html>