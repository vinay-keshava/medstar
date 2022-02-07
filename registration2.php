<?php
		$conn = mysqli_connect("localhost", "root", "", "medstar1");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
//	echo "hi";
        $staff_id=strval($_REQUEST['staff_id']);
        $name=strval($_REQUEST['name']);
	$role=strval($_REQUEST['role']);
	$username=strval($_REQUEST['username']);
	$password=strval($_REQUEST['password']);
	$d_id=strval($_REQUEST['d_id']);
	$link_address='dashboard.html';
//	echo $staff_id;
		$sql = "INSERT INTO Staff (staff_id,name,role,username,password2,d_id) VALUES ('$staff_id','$name','$role','$username','$password','$d_id')";
//	echo $sql;
		if(mysqli_query($conn, $sql)){
		echo '<a href="'.$link_address.'">Link</a>';
		echo "successfull";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);

		}



?>
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
</body>
</head>
</html>
