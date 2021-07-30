<?php
$address=$_POST['address'];
?>
<html>
<head></head>
<body>

<h1>Set Value  of TextArea</h1>
<form action="txt-set.php" method="post">
<p>
Address<textarea name="address"><?php echo $address;?></textarea>
<input type="submit" name="btn"/>
</p>
</form>
</body>
</html>