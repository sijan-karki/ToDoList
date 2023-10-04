<?php
   $conn= new mysqli('localhost','root','','todolist');
   if($conn->connect_error)
   	echo "connection failed.";
   else
   	echo"connected successfully.";

   if(isset($_POST['btnSave'])){

      $taskname=$_POST['txtTaskName'];
      $startdate=$_POST['txtStartDate'];
      $enddate=$_POST['txtEndDate'];
      $user=$_POST['txtuser'];
   

   $sql="INSERT INTO task(task_name,start_date,end_date,user_id) VALUES ('$taskname','$startdate','$enddate','$user')";
   $ret=$conn->query($sql);
   if($ret)
   	echo "Inserted successfully";
   else
   	echo "Inserting failed.";
}
?>
  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
<form method="post" action="test.php">
	Task Name<input type="text" name="txtTaskName" class="form-control">
	Start Date<input type="text" name="txtStartDate" class="form-control">
	End Date<input type="text" name="txtEndDate" class="form-control">
   User ID<input type="text" name="txtuser" class="form-control">
	<input type="submit" name="Btnsave" value="save" class="btn btn-primary">
</form>