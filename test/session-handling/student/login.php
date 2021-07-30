<?php
#wap in php for session Based Aplication
include 'error.php';
include'functions.php';
?>

<html>
<head></head>
<body>
<?php show_errors();?>
<h1>Welcome to session Based Login</h1>
<form action="logcode.php?/=<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
<p>
Email:<input type="email" name="email" id="email"/>
<?php show_errors('email');?></br></br>
Password:<input type="password" name="password" id="password"/>
<?php show_errors('password');?></br></br>
<input type="checkbox" name="remember" value="remember">Remember Me
</br></br>
<input type="submit" value="submit" name="btn">
</p>
</form>
</body>
</html>