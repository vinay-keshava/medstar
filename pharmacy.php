
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<style>
		body{
			background-image: url('im.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "medstar1");

		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}


        $t_id=$_REQUEST['t_id'];
        $t_name=$_REQUEST['t_name'];
       

		$sql = "INSERT INTO pharmacy(t_id,t_name) VALUES ('$t_id','$t_name')";
		if(mysqli_query($conn, $sql)){

			echo "successfull";

		} else{

			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
?>


