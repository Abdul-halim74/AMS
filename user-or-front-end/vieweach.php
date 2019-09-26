<?php include("../classes/student.class.php");  ?>
<?php 
$stud= new student; 

	 $results=$stud->vieweach($_POST);
	

?>
	<div class="container">
		<span><b>Name:</b> <?php echo $_POST['name'] ?></span>
		<span><b>Roll:</b> <?php echo $_POST['roll'] ?></span>
		<span><b>Department name:</b> <?php echo $_POST['dept'] ?></span>
		<span><b>Semester:</b> <?php echo $_POST['sem'] ?></span>	
		<span><b>Subjects:</b> <?php echo $_POST['subject'] ?></span>	
		
	</div>
	<br/>
