<h1> Trashed department List</h1>

<?php 
 include('classes/dept.class.php');
 

 
 $depts = new dept;
 
 if(  isset($_GET['id'])  &&  isset($_GET['action'])   ){
 
 
 $action = $_GET['action'];

 if($action == "restore"){ 
 $did = $_GET['id']; 
 $depts->restoreDepartment($did);
 
 } else if($action == "delete"){

$did = $_GET['id']; 
 $depts->deleteParmanently($did);
 } 
 }

 $results = $depts->getTrasheddepartment();
 

 
 ?>
 
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  
  <?php foreach ($results as $result){ ?>
  
    <tr>
      
      <td><?php echo $result['title'];?></td>
     

	 <td>
	 
	 
	 
	 
	 <a href="?page=trash&action=restore&post=department&id=<?php echo $result['id'];?>" class="btn btn-danger">
	 Restore</a> <a href="?page=trash&action=delete&post=department&id=<?php echo $result['id'];?>" class="btn btn-danger">
	 Permanently Delete</a></td>

    </tr>
  <?php } ?>
  </tbody>
</table>
 

