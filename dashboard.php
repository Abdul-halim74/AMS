<?php

 session_start();
if(empty($_SESSION)){
	
	header("location:in.php");
		
} 

 include('header.php'); 

?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
         <?php 
		 if(isset($_GET['page'])){
		 $page = $_GET['page'];
		 
		 if($page){

			include($page . ".php");

			}	
		 }
			
		 ?>
			
			   </div>
            </div>	
	</div>
	
	
	
<?php include('footer.php'); ?>


