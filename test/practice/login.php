<?php
include 'session_error.php';
include 'functions.php';
?>
<html>
<head></head>
<body>
<?php show_errors();?>
<form action="logcode2.php?/=<?php echo basename ($_SERVER['PHP_SELF']);?>" method="post">
Email:<input type="email" id="email" name="email"/>
<?php show_errors('email');?>
Password:<input type="password" id="password" name="password"/>
<?php show_errors('password');?>
<input type="submit" value="submit" name="btn"/>
</form>
</body>
</html>