<h2>Edit student</h2>
<?php
include("classes/dept.class.php");

$teachers = new dept;
if(isset($_POST['submit'])){
	$teachers->editStudent($_POST);
}
$student_id= $_GET['id'];
$results=$teachers->selectEditStudents($student_id);

$result = mysqli_fetch_array($results,MYSQLI_ASSOC);

?>

<a href="?page=view-students" class="btn btn-success">Go to View teachers</a>
<form action="" method="post">
  <div class="form-group">

	  <input type="hidden" name="stdid" value="<?php echo $result['id'];?>" />
		<label for="exampleInputEmail1">Name</label>
	  <input type="text" class="form-control" name="Name"  value="<?php echo $result['Name'];?>"   />
	  
	  <label for="">Roll </label>
	  <input type="text" class="form-control" name="Roll"  value="<?php echo $result['Roll'];?>"   />
	  
	   <label for="">Department </label>
	  <input type="text" class="form-control" name="Dept"  value="<?php echo $result['Dept'];?>"   />
	  
	  <label for="">Semester </label>
	  <input type="text" class="form-control" name="Semester"  value="<?php echo $result['Semester'];?>"   />
	  
	  <label for="">Reg </label>
	  <input type="text" class="form-control" name="Reg"  value="<?php echo $result['Reg'];?>"   />
  </div>

  <input type="submit" class="btn btn-primary" value="Edit"/ name="submit">
  
  </form>