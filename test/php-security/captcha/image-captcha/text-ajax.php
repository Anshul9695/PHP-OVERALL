

<!doctype html>
<html>
	<head></head>
	<body>
		<form action="text-code.php" method="post">
		<h1>Image Captcha Example</h1>
			<hr/>
			<p>Enter the Email:
				<input type="text" name="email"/>
			</p>
			<p>Enter the captcha:
				    <img src="captcha.php" id="captcha-img" />


           <img src="REFRESH 6.png"style="height:40px;width:50px;" id="refresh-btn"/></br>

     <input type="text" name="captcha" />
</br></br>
 
			</p>
			<p>
				
				<input type="submit" name="submit"/>
			</p>
</form>

<script type="text/javascript" src="jquery.js"></script>
<script>
	
	$(document).ready(function(){
		$("#refresh-btn").on("click",function(){
        var img_element=$("#captcha-img").attr('src','captcha.php');
        

		})

	});
	
		
</script>
	</body>
</html>