<?php
include 'error.php';
?>

<html>
<head></head>
<body>
<?php show_error();?>
<form action="validation.php?/=<?php echo basename($_SERVER['PHP_SELF']);?>"method="post">
Email:<input type="text" id="email" name="email"/>
<?php show_error('email');?>
Password:<input type="password" id="password" name="password"/>
<?php show_error('password');?>
<input type="submit" value="login" id="btn"/>
</form>
</body>
</html>