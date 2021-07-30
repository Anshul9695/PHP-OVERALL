<?php
$conn=mysqli_connect("localhost","root","","ajax_db") or die("connection error");
$sql="select * from students";
$result=mysqli_query($conn,$sql) or die("sql query failed");
$output="";
if(mysqli_num_rows($result)>0)
{
$output='<table border="1" width="100%" cellspacing="0" cellpadding="10px">

<tr>
<th>Id</th>
<th>Name</th>
 </tr>';
while($row=mysqli_fetch_assoc($result))
{
	$output.="<tr><td>{$row["id"]}</td><td>{$row["first_name"]} {$row["last_name"]}</td></tr>";
}

$output.="</table>";
echo $output;
mysqli_close($conn);
}
else{
echo "<h1>No Record found</h1>";
}
?>