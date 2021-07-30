<?php

session_start();
$c_arr=[];
$size=6;
for($i=0;$i<$size;$i++)
{
	$c_arr[$i]=rand(0,9);
}
$captcha=join($c_arr);
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
			<p>Enter the captcha<mark><?php  echo $captcha; ?></mark></br>
     <input type="text" name="captcha" />
			</p>
			<p>
				
				<input type="submit" name="submit"/>
			</p>
</form>
	</body>
</html>