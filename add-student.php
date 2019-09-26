
<?php  

	include ('classes/dept.class.php');
	

	if(isset($_POST['submit'])){
		$students= new dept;
		$students->addStudent($_POST);
	}
	$dept =  new dept;
	$results = $dept->getDepartment();

?>


<h1 class="text-center text-info"> Add  a student</h1>

      <form action="" method="post">

      	<h2><?php
          if(isset($error)){
          	echo $error;
          }


      	  ?></h2>
			
				<div class="form-group">
					<?php if(isset($name_msg)){
						 echo $name_msg;     
					}
					?>				
					<label for="usr">Name:</label>
					<input type="text" class="form-control" id="usr" name="name" placeholder="Enter You Fullname">
				</div>

				

				<div class="form-group">
					<?php if(isset($roll_msg)){
                     echo $roll_msg;     
				}
				?>	
				<label for="roll">Roll NO:</label>
				<input type="text" class="form-control" id="roll" name="roll" placeholder="Enter You Roll No">
				</div>
				
				<div class="form-group">
			       <?php if(isset($depart_msg)){
							echo $depart_msg;    
						}
					?>		

					<label for="exampleInputEmail1">Department:</label>
					<select name="depart" class="form-control">
						<option selected="selected" value="">Select a Department</option>		

			             <?php foreach($results as $r) { ?>
			             <option value="<?php echo $r['title'];?>" > <?php echo $r['title'];?></option>
			             <?php } ?>

					</select>
				    </div>
					
					<div class="form-group">
					<?php if(isset($sem_msg)){
                     echo $sem_msg;     
				}
				?>	
				<label for="sem">Semester:</label>
				<input type="text" class="form-control" id="sem" name="sem"  placeholder="Enter You Semester">
				</div>
				
				<div class="form-group">
					<?php if(isset($reg_msg)){
                     echo $reg_msg;     
				}
				?>	
				<label for="reg">Registration No:</label>
				<input type="text" class="form-control" id="reg" name="reg"  placeholder="Enter You Registration No">
				</div>

				    <div class="form-group">
					<input type="submit" class="form-control btn btn-info" name="submit" value="SUBMIT">
					
				</div>

             </form>