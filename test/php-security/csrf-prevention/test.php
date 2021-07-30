
<?php
require_once __DIR__.'/csrf.php';

?>

<!doctype html>
<html>
	<head></head>
	<body>
		<form action="test-code.php" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
		<h1>CSRF ATTACK</h1>
			<hr/>


			<p>Enter the Email:
				<input type="text" name="email"/>
			</p>
			
				 
     
</br></br>
 
			
			<p>
				
				<input type="submit" name="submit"/>
			</p>
</form>
	</body>
</html>