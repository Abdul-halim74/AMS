<?php
include_once("classes/dept.class.php");

if(isset($_REQUEST['submit'])){
	$teacher = new dept;
	$teacher->addTeacher($_REQUEST);
}
?>


<center><a href="?page=viewTeacher" class="btn btn-success btn-lg">Veiw teachers</a></center>


<h1> Add  Teacher</h1>

<form action="" method="post">
  <div class="form-group">
  
    <label for="exampleInputEmail1">Teacher Name</label>

    <input type="text" class="form-control" name="name"/>
	
	<label for="exampleInputEmail1">Phone number</label>

    <input type="text" class="form-control" name="phone"/>
    
  </div>

  
  <input type="submit" class="btn btn-primary" value="submit" name="submit"/>
  
  </form>
  