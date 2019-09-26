
<?php
session_start();

if($_SESSION){
	
	header("location:dashboard.php");
	
	
} 
 include("header.php");
if(isset($_POST['username'])){
 include('classes/DB.class.php');
 
 $user = new database;
 
 $user->userAuth($_POST);
 
}

 

 ?>


        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
         
		 
		 <h1> LMS Login Form</h1>
		 
		 
		 <form action="" method="post">

<label> Login</label>

<input type="text" name="username" class="form-control"/><br/>

<label> Password</label>

<input type="password" name="password" class="form-control"/>

<input type="submit" value="submit" class="btn btn-primary"/>

</form>		 
			   
			   
			   
                </div>
            </div>
			
	</div>
<?php include('footer.php'); ?>