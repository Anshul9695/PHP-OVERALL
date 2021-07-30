<?php
include 'error.php';
?>
<html>
<head>
</head>
<body>
<?php show_errors();?>
<form action="validation.php?/=<?php echo basename($_SERVER['PHP_SELF']);?>"method="post">
<label for="Email">Email
<input id="email" type="text" name="email"/></br></br>
<?php show_errors('email');?>


</label>

<label for="password">Password
<input id="password" type="password" name="password"/></label>
<?php show_errors('password');?>
<input type="submit"  name="btn" value="login"/>
</form>
</body>
</html>