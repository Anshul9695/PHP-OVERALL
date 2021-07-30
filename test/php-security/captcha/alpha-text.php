<?php
session_start();
$c_arr=[];
 
 $format_arr = [chr(rand(65,90)),chr(rand(97,122)),rand(0,9)];

$size =6;
for($i=0;$i<$size;$i++){
	$c_arr[$i] = $format_arr[rand(0,2)];
}
$captcha= join($c_arr);
$_SESSION['captcha']= $captcha;

?>

<html>
<head></head>
<body>
<h1>Text Captcha Example</h1>
<hr/>
<form action="text-code.php" method="post">
<p>Enter the Email:
<input type="text" name="email"/>
</p>
<p>Enter the captcha: <mark><?php echo $captcha; ?></mark><br/>
<input type="text" name="captcha"/>
</p>
<input type="submit" name="submit"/>

</form>
</body>
</html>