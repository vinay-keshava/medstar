<?php
		$conn = mysqli_connect("localhost", "root", "", "medstar1");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
	echo "hi";
        $dpt_id=strval($_REQUEST['dpt_id']);
        $dpt_name=strval($_REQUEST['dpt_name']);
	$dpt_location=strval($_REQUEST['$dept_location']);

//	echo $staff_id;
		$sql = "INSERT INTO department (dpt_id,dpt_name,dpt_location) VALUES ('$dpt_id','$dpt_name','$dpt_location')";
	echo $sql;
		if(mysqli_query($conn, $sql)){
//		echo '<a href="'.$link_address.'">Link</a>';
		echo "successfull";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);

		}
?>
