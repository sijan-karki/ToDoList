<div class="container">
<?php include ('header.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >\
<form action="display.php" method="post">
	Enter task name <input type="text" name="txtsearch">
	<input type="submit" name="btnsearch" class="btn btn-info" value="Search">
<?php
$conn =new mysqli('localhost','root','','todolist');
$sql ="select * from task";
$searchtext="";
if(isset($_POST['btnsearch']))
	$searchtext=$_POST['txtsearch'];
$sql="select * from task where task_name like'%$searchtext%'";

$result =$conn->query($sql);
$list ="<table class='table'>
<tr>
<th>SN</th>
<th>Task Name</th>
<th>Start Date</th>
<th>End Date</th>
<th>User ID</th>
<th>Action</th>

</tr>";
$data=" ";
$s=1;
while($row=$result->fetch_assoc()){
	$data=$data. "<tr><td>".$s."</td><td>".$row['task_name']."</td><td>".$row['start_date']."</td><td>".$row['end_date']."</td><td>"
	.$row['user_id']."</td><td><a href='delete.php?id=".$row['task_id']."' class='btn btn-danger'>Delete</a><a href='edit.php?id=".$row['task_id']."' class='btn btn-success'>Edit</a></td></tr>";
	$s++;

}
echo $list.$data.'</table>';
include ('footer.php'); ?>
</div>