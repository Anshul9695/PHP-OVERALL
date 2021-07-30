<?php
$city=$_POST['city'];
echo $city;
?>
<html>
<head></head>
<body>
<form action="select4.php" method="post">
<select name="city">
<option value=""><?php echo $city;?></option>

<?php $city_arr=['lucknow','Allahabad','Kanpur'];?>
<?php foreach($city_arr as $key=>$cityname){ ?>
<option value="<?php echo $value;?>">

<?php if(!$cityname==$city){ ?>
</option value="<?php echo $cityname;?>"<?php echo $cityname;?></option>
<?php } ?>
<?php } ?>
</select>
<input type="submit" name="btn" value="submit"/>
</form>
</body>
</html>