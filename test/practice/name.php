<?php
include 'e2.php';
?>
<html>
<head>
</head>
<body>
<?php show_errors();?>
<form action="valid.php?/=<?php echo basename($_SERVER['PHP_SELF']);?>"method="post">
<label for="Email">Email
<input id="email" type="text" name="email"/>
<?php show_errors('email');?></br></br>
</label>

<label for="Name">Name
<input id="name" type="text" name="name"/>
<?php show_errors('name');?>
</label></br></br>



<input type="submit"  name="btn" value="login"/>
</form>
</body>
</html>