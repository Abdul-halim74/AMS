<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Display Date and Time in Javascript</title>
        <script type="text/javascript" src="date_time.js"></script>
    </head>
    <body>
            <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
    </body>
</html>

<?php
	$subject=$_POST['subject'];
		
	include('classes/student.class.php');

	$student = new student;

	if(isset($_POST['att'])){
		
		 $student->insertAtt($_POST);
		
	}

	if(isset($_POST['sem'])){

	$results = $student->selectStudents($_POST);

?>

<form action="" method="post">
	<table class="table">

		<tr>

			<th>Name</th>
			<th>Semester</th>
			<th>Department</th>
			<th>Subject</th>
			<th>Roll</th>
			<th>Attendance</th>

		</tr>


		<?php

		foreach ($results as $result){ 
		?>


		<tr>
			<td><?php echo  $result['Name']; ?></td>
			<td><?php echo  $result['Semester']; ?></td>
			<td><?php echo  $result['Dept']; ?></td>
			<td><?php echo  $subject; ?></td>
			<input type="hidden" name="subject" value="<?php echo $subject ?>" />
			<td><?php echo  $result['Roll']; ?></td>
			<td>  <input type="radio" value="present" name="att[<?php echo $result['id'];?>]"> P  | 

			  <input type="radio" value="absent" name="att[<?php echo $result['id'];?>]"> A   </td>

			</td>
		</tr>

		<?php

		}

		?>

	</table>

	<input type="submit" value="submit"/>

</form>

<?php

}

?>