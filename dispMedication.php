<html>
<head>


<style>
body{
 background: rgb(238,174,202);
background: linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}
#frm
{
 background: rgb(226,226,226);
background: linear-gradient(90deg, rgba(226,226,226,1) 42%, rgba(0,0,0,1) 100%);

}
</style>
<body>
<h1 style="color:#000f21;" align=center>Medication Status</h1>
<br><br><br><br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medstar1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM medication";
$result = mysqli_query($conn, $query);
?><center>
<table bgcolor="" border ="10" cellspacing="10" cellpadding="20" class="dpt_table" >
  <tr>
<th>Patient ID</th>
<th>Staff ID</th>
<th>Tablet ID</th>
<th>Presciption</th>
<th>Number of Days</th>
<th>Status</th>
<th>Morning Dosage</th>
<th>Afternoon Dosage</th>
<th>Night Dosage</th>
  
</tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['p_id']; ?> </td>
   <td><?php echo $data['staff_id']; ?> </td>
   <td><?php echo $data['t_id']; ?> </td>
   <td><?php echo $data['prescp_M_A_N']; ?> </td>
   <td><?php echo $data['no_of_days']; ?> </td>
   <td><?php echo $data['status']; ?> </td>
   <td><?php echo $data['morning']; ?> </td>
   <td><?php echo $data['afternoon']; ?> </td>
   <td><?php echo $data['night']; ?> </td>



<tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="9">No data found</td>
    </tr>
 <?php } ?>
 </table

?></center>
</body>
</html>
