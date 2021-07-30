<?php
include 'error.php';
include 'functions.php';
?>
<html>
<head></head>
<body>
<?php show_errors();?>
<h1>Login Here</h1>
<form action="logcode.php?/=<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
Email:<input type="email" name="email" id="email"/></br>
<?php show_errors('email');?>
password:<input type="password" name="password" id="password"/></br>
<?php show_errors('password');?>
<input type="submit" name="btn" value="login"/>
</form>
</body>
</html>