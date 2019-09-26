<?php

include('classes/dept.class.php');
$dept = new dept;
if(isset($_POST['dept'])){

$dept->editDepartment($_POST);
}
$message = "";

$deptId= $_GET['id'];
$results = $dept->selectEditepartment($deptId);

$result = mysqli_fetch_array($results,MYSQLI_ASSOC);

?>

<?php echo $message;?>

<form action="" method="post">
  <div class="form-group">
  
    <label for="exampleInputEmail1">Title</label>
 
  <input type="hidden" name="depid" value="<?php echo $result['id'];?>" />

  <input type="text" class="form-control" name="dept"  value="<?php echo $result['title'];?>"   />
  
  </div>

  <input type="submit" class="btn btn-primary" value="submit"/>
  
  </form>