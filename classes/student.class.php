<?php

include('DB.class.php');


class student extends database{
	

	public function selectStudents($data){
		
		$semester = $data['sem'];	
		
		$department = $data['department'];	

		$results = mysqli_query($this->con, "SELECT * FROM students WHERE Semester = '$semester'  AND Dept = '$department' ");

		return $results ;

	}

	
		public function insertAtt($data){
			
			$attend = $data['att'];
			
			$dselect = "SELECT DISTINCT date FROM attendance";	


		foreach($attend as $att_key => $att_value){
			
			$get_data = "SELECT * FROM students WHERE id = '$att_key'";
			
			$dataresults = mysqli_query($this->con, $get_data);
			
			foreach($dataresults as $dataresult){
				
				$name = $dataresult['Name'];
				$roll = $dataresult['Roll'];
				$semester= $dataresult['Semester'];
				$dept= $dataresult['Dept'];
				$subject=$_POST['subject'];

				$insert_attend = "INSERT INTO attendance (name,semester,dept,roll,sub,attendance,date) VALUES ('$name','$semester','$dept','$roll','$subject','$att_value',now())";
				$att_taken=mysqli_query($this->con, $insert_attend);
			}			
		}
		
			if($att_taken){
				echo "<span class=\"text-success\">Attendance Successfully have taken</span>";
			}
	}	
	
	/*public function viewAttendance(){
			$sql="SELECT * FROM attendance";
			
			$result=mysqli_query($this->con,$sql);
			$results=$result->fetch_all(MYSQLI_ASSOC);
			return $results;
	}*/
	
	public function viewAttendance(){
			$page=1;
			if(isset($_GET['page'])){
				$page=$_GET['page'];
			}
			$limit=8;
			$offset=$page * $limit-$limit;
			
			$sql="SELECT * FROM attendance";
			
			$result=mysqli_query($this->con,$sql);
			$results=$result->fetch_all(MYSQLI_ASSOC);

			 $total_row=count($results);	
			 $total_page= ceil($total_row/$limit);
			?>
			
			<nav aria-label="...">
		<ul class="pagination">
			<li class="page-item <?=$page==1?'disabled':'' ?>">
			  <a class="page-link" href="?page=<?=$page-1 ?>" tabindex="-1">Previous</a>
			</li>
		
			<?php for($i=1;$i<=$total_page;$i++): ?>
				<li class="page-item <?= $i==$page ?'active':'' ?>"><a class="page-link" href="?page=<?=$i?>"><?= $i ?></a></li>
			<?php endfor; ?>
			
		<li class="page-item <?=$page>=$total_page?'disabled':'' ?>">
		  <a class="page-link" href="?page=<?=$page+1 ?>">Next</a>
		</li>
	  </ul>
	</nav>
	
			<?php

		$sql="SELECT * FROM attendance limit $limit offset $offset";
		
		$result=mysqli_query($this->con,$sql);
		
		if($result->num_rows>0){
			
			$results= $result->fetch_all(MYSQLI_ASSOC);
			return $results;
		}
		return false;

	}	// end viiewAttendance()
	
	
	public function individual($data){

		$date=$data['date'];
		$dept=$data['dept'];
		$sem=$data['sem'];
		$sub=$data['sub'];
		
		$view=mysqli_query($this->con,"SELECT * FROM attendance WHERE date='$date' AND semester='$sem' AND dept='$dept' AND sub='$sub' ");
		$total=mysqli_num_rows($view);
		echo "<h2 class=\"text-center\" style=\"margin-right:200px;\"><b>Students :</b> $total </h2> ";
		return $view;
		
	}	//end individual() function
	
	public function vieweach($data){
		
		$name=$data['name'];
		$dept=$data['dept'];
		$sem=$data['sem'];
		$sub=$data['subject'];
		
		$view=mysqli_query($this->con,"SELECT * FROM attendance WHERE name='$name' AND semester='$sem' AND dept='$dept' AND sub='$sub'  ");
		$total=mysqli_num_rows($view);
		echo "<h2 class=\"text-center text-info\" style=\"margin-right:200px;\"><b>Total class :</b> $total </h2> ","<br>";
		
		$attend=mysqli_query($this->con,"SELECT * FROM attendance WHERE name='$name' AND semester='$sem' AND dept='$dept' AND sub='$sub' AND attendance='present'  ");
		$present=mysqli_num_rows($attend);
		echo "<h2 class='text-success' ><b>Total Presents :</b> $present </h2> ","<br>";
		
		$attends=mysqli_query($this->con,"SELECT * FROM attendance WHERE name='$name' AND semester='$sem' AND dept='$dept' AND sub='$sub' AND attendance='absent'  ");
		$absent=mysqli_num_rows($attends);
		echo "<h2 class='text-danger' ><b>Total absent :</b> $absent </h2> ";
		return $view;
	}	//end vieweach() function
		
}