<?php

 class database{
	
public $host;
public $db_user;
public $db_pass;
public $db_name;
public $con;


function __construct(){
	
	
$this->host = "localhost";
$this->db_user = "root";
$this->db_pass = "";
$this->db_name = "database";

$this->con = mysqli_connect($this->host,$this->db_user,$this->db_pass,$this->db_name);

}


public function userAuth($data){
	
	$username = $data['username'];
	
	$p = $data['password'];
	
	$password = md5($p);	
	
	$sql = "SELECT id	FROM users WHERE username = '$username' AND password = '$password'";
	
	$query = mysqli_query($this->con, $sql);
	
	if(mysqli_num_rows($query) == 1){
		
		session_start();
		
		$_SESSION['user'] = $username ;
		
		header("location:dashboard.php");
			
	}
		
}

public function insertUser($data){
	
	$insert_username  = $data['username'];
	$insert_password = md5($data['pass']);

	$select = "SELECT * FROM users WHERE username = '".$insert_username."'";

	$results = mysqli_query($this->con, $select);

	$count = mysqli_num_rows($results);

	if($count<1){
		
		mysqli_query($this->con,"INSERT INTO users (username,password,role) VALUES ('" . $insert_username . "','" . $insert_password . "',1)");
		
		} else {
		
		$message = "Alredy exists";	
	}

}

	public function totalUsers(){
		
		$select="SELECT * FROM users";
		
		$results= mysqli_query($this->con, $select);
		$count= mysqli_num_rows($results);
		echo '<a href="#" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span> <br> Total Users   $count </a>';
	}
	/*
	public function totalStudents(){
		$select="SELECT * FROM users";
		
		$results= mysqli_query($this->con, $select);
		$count= mysqli_num_rows($results);
		return $count;
	}
	
	public function viewStudents(){
		$sql="SELECT * FROM students WHERE trash='0' ";
		$results = mysqli_query($this->con,$sql);
		$count= mysqli_num_rows($results);
		return $count;
	}
	public function viewTeacher(){
		$sql="SELECT * FROM teacher";
		$results = mysqli_query($this->con,$sql);
		$count= mysqli_num_rows($results);
		return $count;
	}
	
	public function getDepartment(){		
		$sql = "SELECT * FROM department WHERE trash='0'";
		$results = mysqli_query($this->con,$sql);
		$count= mysqli_num_rows($results);
		return $count;
	}
	
	*/

}