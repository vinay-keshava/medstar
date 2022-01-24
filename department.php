<?php
echo "Vinay"

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "medstar1");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

 
        $dpt_id =$_REQUEST['dpt_id'];
        $dpt_name =$_REQUEST['dpt_name'];
        $dpt_location =  $_REQUEST['dpt_location'];

 // Performing insert query execution
        // here our table name is department
        $sql = "INSERT INTO department(dpt_id,dpt_name,dpt_location) VALUES('$dpt_id','$dpt_name','$dpt_location')";

        if(mysqli_query($conn, $sql)){

echo  "Successfull";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        // Close connection
//        mysqli_close($conn);
        ?>
