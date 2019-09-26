<h1> Department List  <span><a href="?page=add-dept" class="btn btn-primary">Add New</a>
</span>   </h1> 
<?php 
 include('classes/dept.class.php');
 
 $depts = new dept;
 
 if(  isset($_GET['id'])  &&  isset($_GET['action'])   ){
 
 $action = $_GET['action'];

 if($action == "delete"){ 
 $did = $_GET['id']; 
 $depts->deleteDepartment($did);
 
 }
 
 }

 $results = $depts->getDepartment();
 
 ?>
 
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Actions</th>
     
    </tr>
  </thead>
  <tbody>
  
  <?php foreach ($results as $result){ ?>
  
    <tr>
      
      <td><?php echo $result['title'];?></td>
     
	 <td><a href="?page=edit&post=department&id=<?php echo $result['id'];?> "      class="btn btn-primary">Edit</a>  
	  
	 <a href="?page=department&action=delete&post=department&id=<?php echo $result['id'];?>" class="btn btn-danger">Delete</a>
	 
	 
	 </td>

    </tr>
	
  <?php } ?>
   
  </tbody>
</table>

<a href="?page=trash" class="btn btn-danger">Go to Trash</a> 

