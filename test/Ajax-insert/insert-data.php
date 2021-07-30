<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table id="main" border="0" cellspacing="0">
	<tr>
		<td>
			<h1>Add Record in Data base with Ajax</h1>
		</td>
	</tr>
<td id="table-form">
	First Name:<input type="text" id="fname"/></br></br>
	Last Name:<input type="text" id="lname"/></br></br>
	<input type="submit" value="save" id="save-button"/>
</td>

	<tr>
		<td id="table-load">
			<input type="button" id="load-button" value="Load Data">
		</td>
	</tr>
	<tr>
		<td id="table-data">
			<table border="1" width="100%" cellspacing="0" cellpadding="10">
				<tr>
					<th>Id</th>
					<th>Name</th>
				</tr>
				<tr>
					<td align="center">1</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
function loadTable()
{
$.ajax({
url:"ajax-load.php",
type:"POST",
success:function(data)
{
	$("#table-data").html(data);
}
});
}
loadTable();

$("#save-button").on("click",function(e){
e.preventDefault();
var fname =$("#fname").val();
var lname =$("#lname").val();

$.ajax({

url:"ajax-insert.php",
type:"POST",
data:{first_name:fname, last_name:lname},
success:function(data)
{
	if(data==1)
	{
		loadTable();
	}

	else
	{
		alert("Cant save Records");
	}
}

});

})

});
</script>
</body>
</html>