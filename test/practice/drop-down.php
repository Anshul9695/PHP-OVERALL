<?php
$select=$_POST['select'];
$name=$_POST['name'];
$email=$_POST['email'];
$con=mysqli_connect("localhost","root","","practice_db");
$sql="insert into tbl_drop(name,email,city)values('$name','$email','$select')";
$result_set=mysqli_query($con,$sql);
?>

<html>
<head>
</head>
<body>
<form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
Enter Name:<input type="text" name="name"/></br></br>
Enter Email:<input type="email" name="email"/></br></br>
<?php $arr=array("lucknow","Allahabad","kanpur");?>
select City:<select name="select">
<option value="">--select city--</option>
<?php foreach($arr as $key =>$value){?>
<option value="<?php echo $value;?>"><?php echo $value;?></option>
<?php }?>
</select>
<input type="submit"/>
</form>
</body>
</html>