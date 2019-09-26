<h1 class="text-primary"> VIEW Students</h1>
<?php 
 include("classes/dept.class.php"); 
  $depts = new dept;
  
	if(  isset($_GET['id'])  &&  isset($_GET['action'])   ){
 
 $action = $_GET['action'];

 if($action == "delete"){ 
 $did = $_GET['id']; 
 $depts->deleteStudent($did);
 
 }
 
 }
 
	 $results = $depts->viewStudents();

 ?>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Reg No</th>
      <th scope="col">Actions</th>
     
    </tr>
  </thead>
  <tbody>
  
  <?php foreach ($results as $result){ ?>
  
    <tr>
      
      <td><?php echo $result['Name'];?></td>
      <td><?php echo $result['Roll'];?></td>
      <td><?php echo $result['Dept'];?></td>
      <td><?php echo $result['Semester'];?></td>
      <td><?php echo $result['Reg'];?></td>
     

	 <td><a href="?page=editStudent&post=view-students&id=<?php echo $result['id'];?> " class="btn btn-primary">Edit</a>  

	 <a href="?page=view-students&action=delete&post=view-students&id=<?php echo $result['id'];?>" class="btn btn-danger">Delete</a>
	  
	 </td>

    </tr>
	
  <?php } ?>
  
  </tbody>
</table>
