<html>
<head>
</head>
<body>
<form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="get">
Name:<input type="text" name="fname"/></br></br>
Password:<input type="password" name="password"/></br></br>
<input type="submit" value="save"/>
</form>
</body>
</html>
<?php
$name=$_REQUEST['fname'];
$password=$_REQUEST['password'];
echo $name;
echo $password;
?>