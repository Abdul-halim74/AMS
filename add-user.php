<h1> Add User  <span>  <a href="#" class="btn btn-primary ">View User</a></span></h1>


<?php

include('classes/DB.class.php');

if(isset($_POST['username'])){
$dbclass = new database;

$dbclass->insertUser($_POST);

}


?>


<form action="" method="post">
  <div class="form-group">
  
    <label for="exampleInputEmail1">Username</label>
	
	
	
	
	
	
	
    <input type="text" class="form-control" name="username"/>

    
  </div>
  
  <div class="form-group">
  
    <label for="exampleInputEmail1">Password</label>
	
	
	

	
    <input type="password" class="form-control" name="pass"/>

    
  </div>

  
  <input type="submit" class="btn btn-primary" value="submit"/>
  
  </form>
  
