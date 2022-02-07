<!DOCTYPE html>
<html>

<head>
<title>Insert Page page</title>
<?php
$conn = mysqli_connect("localhost", "root", "", "medstar1");

if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}

$p_id=strval($_REQUEST['p_id']);
        $staff_id=$_REQUEST['staff_id'];
        $t_id=$_REQUEST['t_id'];
        $prescp_M_A_N=$_REQUEST['prescp_M_A_N'];
        $no_of_days=$_REQUEST['no_of_days'];
        $status=$_REQUEST['status'];
        $morning=$_REQUEST['morning'];
        $afternoon=$_REQUEST['afternoon'];
        $night=$_REQUEST['night'];

$sql1 = "SELECT * FROM medication where p_id='$p_id'";
echo $sql1;
$result = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)<=0)
{
            echo '<script type="text/javascript" language="javascript">
            if(confirm("ID DOESNOT EXIST! PLEASE REGISTER!"))
            {
                self.location="index.html";
            }
            </script> ';
            exit();
}
else{

$sql = "UPDATE medication SET staff_id='$staff_id',t_id='$t_id',prescp_M_A_N='$prescp_M_A_N',no_of_days='$no_of_days',status='$status',morning='$morning',afternoon ='$afternoon',night='$night' WHERE p_id='$p_id'";
echo $sql;
            if(mysqli_query($conn, $sql)){

                echo '<script type="text/javascript" language="javascript">
                if(confirm("UPDATION SUCCESSFULL!"))
                {
                    self.location="index.html";
                }
                </script> ';

            } else{

                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
}

mysqli_close($conn);


        ?>
</head>

<body>
<center>




</center>
</body>

</html>
