<?php
$conn=new mysqli('localhost','root','','todolist');
$id= $_GET["id"];
$sql ="Delete From task WHERE task_id=".$id;

$ret= $conn->query($sql);
if($ret)
	header("Location:display.php");
?>