<?php
include 'dbconnect.php';
$select_sql="select * from tbl_file";
$result_set=mysqli_query($con,$select_sql);

$count=mysqli_num_rows($result_set);
if($count>0):?>

    <table border="1" width="100%">
      
      <tr>
      <th>#</th>  
      <th>FILES</th>  
      

      </tr>
	<?php while($row=mysqli_fetch_assoc($result_set)):?>
	
	<tr>
        <td><?php echo $row['id']; ?></td>  
        <td><img src="<?php echo $row['photo']; ?>"></td>  
         

  
         
      </tr>
   <?php endwhile;?>  
	 	
  </table>
   <?php else: ?>
   <h5> No record Found</h5>
  <?php endif; ?> 
  
