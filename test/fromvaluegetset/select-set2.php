<?php
$city=$_POST['city'];
echo $city;
?>
<html>
<head></head>
<body>

<h1>Demo of Select-set2 page Tag</h1>
<form action="select2-set.php" method="post">
<p>
Select City:
<select name="city">
<option value=""><?php echo $city;?></option>
<?php $city_arr=['Banda','Lucknow','Kanpur'];?>
<?php foreach($city_arr as $index=>$cityname)?>
<?php if($cityname!=$city){?>
<option value="<?php echo $cityname;?>"<?php echo $cityname;?></option>
<?php } ?>
<?php}?>

</select>
<input type="submit" name="btn" value="Edit"/>
</p>
</form>
</body>
</html>