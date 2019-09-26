<?php
include('DB.class.php');


class dept extends database{
	
public function addDepartment($data)
	{
	
	$department = $data['dept'];	
	mysqli_query($this->con,"INSERT INTO department (title,trash) VALUES ('" . $department . "','0')");
		
	}
	
	public function editDepartment($data)
	{
	
	$id = 	$data['depid'];
	$department = $data['dept'];	
	mysqli_query($this->con,"UPDATE department SET title = '" . $department . "' WHERE id = '" . $id . "'");
		
	}
	
	
	public function deleteDepartment($id)
	{
	
		
	mysqli_query($this->con,"UPDATE department SET trash = '1' WHERE id = '" . $id . "'");
		
	}
	
	
	public function restoreDepartment($id)
	{
	
		
	mysqli_query($this->con,"UPDATE department SET trash = '0' WHERE id = '" . $id . "'");
		
	}
	
	public function deleteParmanently($id)
	{
		
	mysqli_query($this->con,"DELETE FROM department WHERE id = '" . $id . "'");
		
	}

	public function getDepartment(){		
		$sql = "SELECT * FROM department WHERE trash='0'";
		$row = mysqli_query($this->con,$sql);

		return $row;
	}
	
	
	public function getTrasheddepartment(){
		
		$sql = "SELECT * FROM department WHERE trash='1'";
		$row = mysqli_query($this->con,$sql);

		return $row;
	
	}
	
	public function selectEditepartment($dept_id){
		
		$sql = "SELECT * FROM department WHERE id='" . $dept_id . "'";
		$row = mysqli_query($this->con,$sql);
		
		return $row;	
	}
	
	public function addStudent($data){
		$name=$data['name'];
		$roll=$data['roll'];
		$depart=$data['depart'];
		$sem=$data['sem'];
		$reg=$data['reg'];
		
		mysqli_query($this->con,"INSERT INTO students (Name, Roll, Dept, Semester, Reg, trash) VALUES('".$name."','".$roll."','".$depart."','".$sem."','".$reg."','0') ");
	}
	public function viewStudents(){
		$sql="SELECT * FROM students WHERE trash='0' ";
		$row = mysqli_query($this->con,$sql);
		return $row;
	}
	
	public function addTeacher($data){
		$name=$data['name'];
		$phone=$data['phone'];
		
		$result=mysqli_query($this->con, "INSERT INTO teacher (name, phone) VALUES('".$name."','".$phone."')");
		if($result){
			echo "Data inserted";
		}
		else{
			echo"Insert fail";
		}
	}
	
	public function viewTeacher(){
		$sql="SELECT * FROM teacher";
		$row = mysqli_query($this->con,$sql);
		return $row;
	}
	
	public function selectEditTeacher($teacher_id){
		
		$sql = "SELECT * FROM teacher WHERE id='".$teacher_id."'";
		$row = mysqli_query($this->con,$sql);
		
		return $row;	
	}
	
	public function editTeacher($data)
	{
	
	$id = 	$data['teacher_id'];
	$name = $data['name'];	
	$phone = $data['phone'];	
	mysqli_query($this->con,"UPDATE teacher SET name = '" . $name . "' , phone = '" . $phone . "' WHERE id = '" . $id . "'");
		
	}
	
	public function deleteTeacher($id)
	{
		
	mysqli_query($this->con,"DELETE FROM teacher WHERE id = '" . $id . "'");
		
	}
	
	public function selectEditStudents($student_id){
		
		$sql = "SELECT * FROM students WHERE id='".$student_id."'";
		$row = mysqli_query($this->con,$sql);
		
		return $row;	
	}
	
	public function editStudent($data){
		$id = 	$data['stdid'];
	$name = $data['Name'];	
	$roll = $data['Roll'];	
	$dept = $data['Dept'];	
	$sem = $data['Semester'];	
	$reg = $data['Reg'];	
	mysqli_query($this->con,"UPDATE students SET Name = '" . $name . "' , Roll = '" . $roll . "', Dept = '" . $dept . "', Semester = '" . $sem . "',Reg = '" . $reg . "'  WHERE id = '" . $id . "'");
		
	}
	
	public function deleteStudent($id)
	{
		
	mysqli_query($this->con,"DELETE FROM students WHERE id = '" . $id . "'");
		
	}
	
}