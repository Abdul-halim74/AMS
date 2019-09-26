<?php include("classes/student.class.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
   
</head>

<body class="fix-header">
	<div class="container">
		
<?php
$viewatt= new student;
 $results=$viewatt->viewAttendance();

?>
	<center><a href="dashboard.php" class="btn btn-success btn-lg">Go to Dashboard</a></center>
<a href="user-or-front-end/dashboard.php"><button class="btn btn-primary">View attendance by date</button></a>
	<table class="table">
		<thead>
			<th>Name</th>
			<th>Semester</th>
			<th>Department</th>
			<th>Roll</th>
			<th>Subject</th>
			<th>Attendance</th>
			<th>Attendance Date</th>
		</thead>
		
			<?php 
			
			foreach($results as $val){ ?>
			
			<tr>
				<td><?php  echo $val['name']; ?></td>
				<td><?php  echo $val['semester']; ?></td>
				<td><?php  echo $val['dept']; ?></td>
				<td><?php  echo $val['roll']; ?></td>
				<td><?php  echo $val['sub']; ?></td>
				<td><?php  echo $val['attendance']; ?></td>
				<td><?php  echo $val['date']; ?></td>
			</tr>
			<?php } ?>
					
		</table>
	</div>