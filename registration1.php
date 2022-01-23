<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style>
		body{
			background-image: url('imga.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "Staff");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
	echo "hi";
        $staff_id=$_REQUEST['staff_id'];
        $name=$_REQUEST['name'];
	$role=$_REQUEST['role'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$d_id=$_REQUEST['d_id'];
	echo $staff_id;
		$sql = "INSERT INTO Staff(staff_id,name,role,username,password,d_id) VALUES ('$staff_id','$name','$role','$username','$password','$d_id')";

		if(mysqli_query($conn, $sql)){
			echo "successfull";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);

		}
?>
</body>
</head>
</html>
