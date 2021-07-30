<?php
include('database.php');
$obj=new query();
if(isset($_GET['type']) && $_GET['type']=='delete')
{
  $id=$obj->$_GET['id'];
 $condition_arr=array('id'=>$id);
$result=$obj->deleteData('students',$condition_arr);
//print_r($res);
}
$result=$obj->getData('students','*','','id','asc');
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="css/style-float.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Student_Name</th>
      <th scope="col">Age</th>
      <th scope="col">City</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(isset($result['0'])){ 
      $id=1;
         foreach($result as $list){
      ?>
   
    <tr>
        
      <th scope="row"><?php echo $id ?></th>
     <td><?php echo $list['name']?></td>
     <td><?php echo $list['email'] ?></td>
     <td><?php echo $list['mobile']?></td>
      <td><a href="" class="text-primary" >Edit</a></td>
      <td><a href="?type=delete$id=<?php echo $list['id']?>" class="text-danger" >Delete</a></td>
      
    </tr>
  
    
    
  <tr>
    <?php 
    $id++;
  } } else{ ?>
      <td colspan="6" align="center">No Record Found!</td>
  </tr>
<?php } ?>
  </tbody>
</table>

<div class="form-group"><a href="manage-user.php"  >Add User</a></div>  
</body>
</html>