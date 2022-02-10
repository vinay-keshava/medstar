<!DOCTYPE html>
<html>
 
<head>
        <title>Insert Page page</title>
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
        $ph_no=strval($_REQUEST['ph_no']);
        $age=strval($_REQUEST['age']);
 
                $sql = "INSERT INTO patient(p_id,name,d_id,staff_id,phone_no,age) VALUES ('$p_id','$name','$dept_id','$s_id','$ph_no','$age')";
                if(mysqli_query($conn, $sql)){
 
                        echo "successfull";
 

                } else{
 
                        echo "ERROR: Hush! Sorry $sql. "
                                . mysqli_error($conn);
                }
 
                /*$sql1 = "SELECT id FROM details WHERE ename='$ename'";
                $result = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result)>0)
                {
                        while($row=mysqli_fetch_assoc($result))
                        {
                                $reference_id=$row['id'];
                        }
                }
                else{
                        echo "no results";
                }
                mysqli_close($conn);
                echo '<b><div style="font-size:2.5em;color:red">REPORT:</div></b>';
                echo "NAME : ";print strtoupper($ename);
                echo "<br/><br/>";
                echo "REFERENCE-ID : ";print strtoupper($reference_id);
                echo "<br/><br/>";
                echo "EMPLOYEE_ID : ";print strtoupper($sel);
                echo "<br/><br/>";
 
        ?>
</head>
<body>
        <body>
       
          <div  style="padding-top: 20px; padding-bottom: 50px;">
            <div  style="max-width: 50%; border-style: outset outset outset outset; margin: auto; background: #ffffff;">
                <div style="padding-top: 10px; padding-left: 20px; padding-right: 20px; padding-bottom: 20px;">
                        <?php
                $conn = mysqli_connect("localhost", "root", "", "emp");
 
                if($conn === false){
                        die("ERROR: Could not connect. "
                                . mysqli_connect_error());
                }
 
 
        $ename=$_REQUEST['ename'];
        $add1=$_REQUEST['add1'];
        $add2=$_REQUEST['add2'];
        $city=$_REQUEST['city'];
        $pin=intval($_REQUEST['pin']);
        $email=$_REQUEST['email'];
        $sex=$_REQUEST['sex'];
        $qual=$_REQUEST['option'];
        $class= $class=$_REQUEST['option1'];
        $exp=intval($_REQUEST['option2']);
        $age=intval($_REQUEST['age']);
 
                if($qual=='Under Graduate' && $class=='Distinction' && $exp==3 && $age<=30)
                                $sel="Congrulations!...SELECTED";
                else if($qual=='Post Graduate' && $class=='Distinction' && $exp>=1  && $age<=35)
                                $sel="Congrulations!...SELECTED";
                else
                                $sel="BETTER LUCK NEXT TIME";
 
                $sql = "INSERT INTO details(ename,add1,add2,city,pin,email,sex,qual,class,exp,age,result) VALUES ('$ename','$add1','$add2','$city',$pin,'$email','$sex','$qual','$class',$exp,$age,'$sel')";
                //echo $sql;
                if(mysqli_query($conn, $sql)){
 
                        echo "successfull";
 
                } else{
 
                        echo "ERROR: Hush! Sorry $sql. "
                                . mysqli_error($conn);
                }
 
                $sql1 = "SELECT id FROM details WHERE ename='$ename'";
                $result = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result)>0)
                {
                        while($row=mysqli_fetch_assoc($result))
                        {
                                $reference_id=$row['id'];
                        }
                }
                else{
                        echo "no results";
                }
                mysqli_close($conn);
                echo '<b><div style="font-size:2.5em;color:red">REPORT:</div></b>';
                echo "NAME : ";print strtoupper($ename);
                echo "<br/><br/>";
                echo "REFERENCE-ID : ";print strtoupper($reference_id);
                echo "<br/><br/>";
                echo "EMPLOYEE_ID : ";print strtoupper($sel);
                echo "<br/><br/>";
 
        ?>
                                <p><b><center><div style="font-size:2em">ThankYou for Registering</div></center></b></p>
                </div>
        </div>
</div>
*/
?>
</body>
 
 
</html>
