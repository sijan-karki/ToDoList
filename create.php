<?php
   $conn= new mysqli('localhost','root','','todolist');
   if(isset($_POST['Btnsave'])){

      $fullname =$_POST['txtFullname'];
      $email =$_POST['txtEmail'];
      $password =$_POST['txtPassword'];
      $type =$_POST['ddUserType'];

   $sql="INSERT INTO user(fullname,email,password,user_type) VALUES ('$fullname','$email','$password','$type')";
   $ret=$conn->query($sql);
   if($ret)
      echo "User created successfully";
   else
      echo "User Creating failed.";
}
?>
  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
<form method="post" action="create.php">
	Fullname<input type="text" name="txtFullname" class="form-control">
	Email<input type="text" name="txtEmail" class="form-control">
	Password<input type="text" name="txtPassword" class="form-control">
   User Type<select type="text" name="ddUserType" class="form-control">
      <option value="1">Admin user</option>
      <option value="2">Normal user</option>
	<input type="submit" name="Btnsave" value="Update" class="btn btn-primary">
</form>