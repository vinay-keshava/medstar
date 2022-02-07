<!DOCTYPE html>
<html>

<head>
	<title>Delete Patient</title>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "medstar1");

		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}


       	   	$p_id = $_REQUEST['p_id'];
		$sql1 = "DELETE FROM patient WHERE p_id='$p_id'";
		echo $sql1;
		if(!mysqli_query($conn,$sql1))
		{
			echo '<script type="text/javascript" language="javascript">
            if(confirm("User does not exists"))
            {
                self.location="dashboard.html";
            }
            </script> ';
            exit();
		}
		else{
                echo '<script type="text/javascript" language="javascript">
                if(confirm("DELETED SUCCESSFULLY!"))
                {
                    self.location="dashboard.html";
                }
                </script> ';
            }
        ?>
</head>

<body>
	<center>
	</center>
</body>

</html>
