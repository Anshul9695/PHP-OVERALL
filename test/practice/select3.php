<?php

?>
<html>
<head></head>
<body>
<form action="select4.php" method="post">
<select name="city">
<option value="">--select city--</option>

<?php $city_arr=['lucknow','Allahabad','Kanpur'];?>
<?php foreach($city_arr as $key=>$value){ ?>
<option value="<?php echo $value;?>">
<?php echo $value;?>
</option>
<?php } ?>
</select>
<input type="submit" name="btn" value="submit"/>
</form>
</body>
</html>