<?php
session_start();
$op_arr=['+','-','*'];
$no1=rand(1,9);
$op=$op_arr[rand(0,2)];
$no2=rand(1,$no1);
$format="{$no1}"."{$op}"."{$no2}";
$result=eval("return $format;");
$captcha=$result;
$_SESSION['captcha']=$captcha;
?>

<!doctype html>
<html>
	<head></head>
	<body>
		<form action="text-code.php" method="post">
		<h1>Text Captcha Example</h1>
			<hr/>
			<p>Enter the Email:
				<input type="text" name="email"/>
			</p>
			<p>Solve the Expression:<mark><?php  echo $format; ?>=</mark></br>
     <input type="text" name="captcha" />
			</p>
			<p>
				
				<input type="submit" name="submit"/>
			</p>
</form>
	</body>
</html>