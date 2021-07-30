<?php require_once __DIR__.'/layout/header.php';?>
<?php require_once __DIR__.'/layout/nav.php';?>
<?php require_once __DIR__.'/config/dbconnect.php';?>
<?php require_once __DIR__.'/config/setting.php';?>

<?php
$select_sql="select *from practice_tbl";
$result_set=mysqli_query($con,$select_sql);
$count=mysqli_num_rows($result_set);
if($count>0):?>

    <table border="1" width="100%">
      
      <tr>
      <th>#</th>  
      <th>title</th>  
      <th>slug</th>  
      <th>content</th>
      <th>edit</th>
           <th>view</th>
            <th>delete</th>

      </tr>
	<?php while($row=mysqli_fetch_assoc($result_set)):?>
	
	<tr>
        <td><?php echo $row['id']; ?></td>  
        <td><?php echo $row['title']; ?></td>  
        <td><?php echo $row['slug']; ?></td>  
        <td><?php echo $row['content']; ?></td>
        <td><a href="edit-post.php?id=<?php echo $row['id'];?>">edit</a></td>  
        <td><a href="posts.php?id=<?php echo $row['id'];?>">view</a></td>  

  
        <td><a href="javascript:delete_user('<?php echo $row['id'];?>');">delete</a></td>  
      </tr>
   <?php endwhile;?>  
	 	
  </table>
   <?php else: ?>
   <h5> No record Found</h5>
  <?php endif; ?> 
  
  <script>
  function delete_user()
  {
	  var c=confirm("Are you sure want's to delete");
	  if(c==true)
	  {
		  var base_url=<?php echo BASE_URL;?>
		  window.location.href=(base_url+"delete.php?id="+id);
	  }
  }  
 </script>

<?php require_once __DIR__.'/layout/footer.php';?>
