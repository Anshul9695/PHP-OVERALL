

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
				    <img src="captcha-2.php" id="captcha-img" />

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
		$("#captcha-img").attr("src","captcha.php");
		$("#refresh-btn").on("click",function(){
          var version=Math.floor(Math.random() *101);
        $.ajax({
  url:"captcha-2.php?ver="+version,
  type:"GET",
  success:function(image)
  {
$("#captcha-img").attr("src","captcha.jpeg?ver="+version);
  }
        });
  

	});
	});
	
		
</script>
	</body>
</html>