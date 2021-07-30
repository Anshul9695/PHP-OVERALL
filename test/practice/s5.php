<?php
?>
<html>
<head></head>
<body>
<form action="s6.php" method="post">
<select name="city">
<option>--select city--</option>
<?php $city_arr=['lucknow','kanpur','Allahabad'];?>
<?php foreach($city_arr as $key=>$value){?>
<option value="<?php echo $value;?>">
<?php echo $value;?>
</option>
<?php } ?>
<input type="submit" value="submit" name="btn"/>
</select>
</form>
</body>
</html>