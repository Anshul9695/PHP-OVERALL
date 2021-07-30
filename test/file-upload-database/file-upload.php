<?php
include 'dbconnect.php';

if(isset($_POST['btn']))
{
	$filename=$_FILES["image"]["name"];
	$tmpname=$_FILES["image"]["tmp_name"];
	$folder="upload/".$filename;
	$sql="insert into tbl_file(photo) values('$filename')";
	$result_set=mysqli_query($con,$sql);
	if(move_uploaded_file($filename,$folder))
	{
		echo 'not inserted';
	}
	else{
		echo 'inserted';
	}
}





?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
Select the file:<input type="file" name="image"/></br></br>
<input type="submit" name="btn"></br></br>

</form>
<a href="show.php">Show The File</a>
</body>
</html>