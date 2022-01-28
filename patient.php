<html>

<head>
<title>Insert Patient</title>
<style>
body{
background-image: url('imga.jpg');
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


        $p_id=$_REQUEST['p_id'];
        $name=$_REQUEST['name'];
        $dept_id=$_REQUEST['dept_id'];
        $s_id=$_REQUEST['s_id'];
        $ph_no=intval($_REQUEST['ph_no']);
        $age=intval($_REQUEST['age']);

$sql = "INSERT INTO patient(p_id,name,d_id,staff_id,phone_no,age) VALUES ('$p_id','$name','$dept_id','$s_id',$ph_no,$age)";
if(mysqli_query($conn, $sql)){

echo "successfull";

} else{

echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}

?>
</body>


</html>
