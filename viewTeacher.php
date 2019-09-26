<h2>View teachers</h2>

<?php 
 include("classes/dept.class.php");
 $teachers = new dept;
 
 if(  isset($_GET['id'])  &&  isset($_GET['action']) ){
 
 $action = $_GET['action'];

 if($action == "delete"){ 
 $did = $_GET['id']; 
 $teachers->deleteTeacher($did);
 
 }
 
 }

	 $results = $teachers->viewTeacher();

 ?>
 <table class="table">
  <thead>
    <tr>
	
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
     
    </tr>
  </thead>
  <tbody>
  
  <?php foreach ($results as $result){ ?>
  
    <tr>
      
      <td><?php echo $result['name'];?></td>
      <td><?php echo $result['phone'];?></td>
 
	 <td><a href="?page=editTeacher&post=viewTeacher&id=<?php echo $result['id'];?>" class="btn btn-primary">Edit</a>  

	 <a href="?page=viewTeacher&action=delete&post=viewTeacher&id=<?php echo $result['id'];?>" class="btn btn-danger">Delete</a>
	  
	 </td>

    </tr>
	
  <?php } ?>
  
  </tbody>
</table>