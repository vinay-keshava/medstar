 <!DOCTYPE html>
<html>

<head>
<?php

$conn = mysqli_connect("localhost", "root", "", "medstar1");
// Check connection
if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

$sql = "SELECT * FROM department";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)<=0)
        {
            echo '<script type="text/javascript" language="javascript">
            if(confirm("NO RESULTS FOUND!"))
            {
             
            }
            </script> ';
            exit();
        }
        else{
  echo "<center>";
                echo '<h1 style="font-size: 40px"><b>DEPARTMENT RESULTS</b></h1>'."<hr>";
                echo '<table border=5px style="background-color: lightblue ;font-size: 24px">';
                 echo '<tr><th style="color:brown">DEPARTMENT ID</th><th style="color:brown">DEPARTMENT NAME</th><th style="color:brown">DEPARTMENT LOCATION</th><th>'."<br>";
                while($row=mysqli_fetch_assoc($result))
                {
    echo "<tr><td>".$row['dpt_id']."</td><td>".$row['dpt_name']."</td><td>".$row['dept_location']."</td><td>";
                }
                 echo "</table>";
                echo "</center>";
	        }
		mysqli_close($conn);


        ?>	
</head>
<body style="background-color: cyan;">
</body>
</html>
