<?php
include 'er.php';
?>


<html>
<head></head>
<body>
<?php show_errors();?>
<form action="v2.php?/=<?php echo basename ($_SERVER['PHP_SELF']);?>" method="post">
Email:<input type="text" name="email" id="email"/>
<?php show_errors('email');?>

Password:<input type="password" name="password" id="password">
<?php show_errors('password');?>
<input type="submit" name="btn" value="submit"/>
</form>
</body>
</html>