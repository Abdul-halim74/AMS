<?php include("../classes/student.class.php");  ?>
<?php 
$stud= new student; 

	 $results=$stud->individual($_POST);

?>

	<div class="container">
		<span><b>Date:</b> <?php echo $_POST['date'] ?></span>
		<span><b>Department:</b> <?php echo $_POST['dept'] ?></span>
		<span><b>Semester:</b> <?php echo $_POST['sem'] ?></span>
		<span><b>Subject:</b> <?php echo $_POST['sub'] ?></span>	
	</div>
	<br/>
<form action="" method="post">
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">Name</th>
		  <th scope="col">Roll</th>
		  <th scope="col">Attendance</th>
		  
		 
		</tr>
	  </thead>
	  <tbody>
	  
	  <?php 

	   foreach ($results as $result){ ?>
	  
		<tr>
		  <td><?php echo $result['name'];?></td>
		  <td><?php echo $result['roll'];?></td>
		  <td><?php echo $result['attendance'];?></td>
		  
		</tr>
		<?php } ?>
		
	  
	  </tbody>
	</table>
</form>