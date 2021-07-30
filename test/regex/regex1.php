<?php
include 'errors.php';
?>
<html>
<head></head>
<body>
<?php show_errors();?>
<h1>Demo of Pregmatch</h1>
<form action="validate.php?/=<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
<p>
Enter the Mobile:<input type="text" name="mobile">
<?php show_errors('mobile');?>
<input type="submit" name="btn"/>
</p>
</form>
</body>
</html>