<?php

include('classes/dept.class.php');
 
 $teachers = new dept;
 if(isset($_POST['submit'])){

	$teachers->editTeacher($_POST);

}

$teacher_id= $_GET['id'];
$results = $teachers->selectEditTeacher($teacher_id);

$result = mysqli_fetch_array($results,MYSQLI_ASSOC);



?>
<a href="?page=viewTeacher" class="btn btn-success">Go to View teachers</a>
<form action="" method="post">
  <div class="form-group">
  
    <label for="exampleInputEmail1">Name</label>
 
   <input type="hidden" name="teacher_id" value="<?php echo $result['id'];?>" />

   <input type="text" class="form-control" name="name"  value="<?php echo $result['name'];?>"   />
  
	<label for="">Phone</label>
  <input type="text" class="form-control" name="phone" value="<?php echo $result['phone'];?>" />
  </div>

  <input type="submit" class="btn btn-primary" value="Edit"/ name="submit">
  
  </form>