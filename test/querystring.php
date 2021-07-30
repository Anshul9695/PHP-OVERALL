<?php
include 'errors.php';
?>
<html>
<head>
</head>
<body>
<?php show_errors();?>
<form action="validate.php?/=<?php echo basename($_SERVER['PHP_SELF']);?>"method="post">
<label for="name">Name
<input id="name" type="text" name="name"/></br></br>
<?php show_errors('name');?>


</label>

<label for="moblie">Mobile
<input id="mobile" type="text" name="mobile"/></label>
<?php show_errors('mobile');?>
<input type="submit"  name="btn" value="submit"/>
</form>
</body>
</html>