<h1> Add Department  <span>  <a href="?page=department" class="btn btn-primary ">View Departments</a></span></h1>


<?php

include('classes/dept.class.php');

if(isset($_POST['dept'])){
$dept = new dept;

$dept->addDepartment($_POST);
}
$message = "";

?>

<?php echo $message;?>
<form action="" method="post">
  <div class="form-group">
  
    <label for="exampleInputEmail1">Title</label>
	
	
    <input type="text" class="form-control" name="dept"/>

    
  </div>

  
  <input type="submit" class="btn btn-primary" value="submit"/>
  
  </form>
  
