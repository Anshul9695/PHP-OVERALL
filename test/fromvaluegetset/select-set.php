<?php
$city=$_POST['city'];
echo $city;
?>
<html>
<head></head>
<body>

<h1>Edit of Select Tag</h1>
<form action="select-set.php" method="post">
<p>
Select City:
<select name="city">
<option value="" <?php if($city=='select'){echo "selected";}?>>--select City--</option>
<option value="Delhi"  <?php if($city=='Delhi'){echo "selected";}?>>Delhi</option>
<option value="Hydrabad" <?php if($city=='Hydrabad'){echo "selected";}?>>Hydrabad</option>
<option value="Bengluru" <?php if($city=='Bengluru'){echo "selected";}?>>Bengluru</option>
<option value="Noida" <?php if($city=='Noida'){echo "selected";}?>>Noida</option>
</select>
<input type="submit" name="btn" value="Edit"/>
</p>
</form>
</body>
</html>