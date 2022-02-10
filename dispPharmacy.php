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
<h1 style="color:#000f21;" align=center>Pharmacy Records </h1>
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
$query = "SELECT * FROM pharmacy";
$result = mysqli_query($conn, $query);
?><center>
<table bgcolor="" border ="10" cellspacing="10" cellpadding="20" class="pharmacy_table" >
  <tr>
<th>Tablet ID</th>
<th>Tablet Name</th>

</tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $data['t_id']; ?> </td>
   <td><?php echo $data['t_name']; ?> </td>
  

<tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="9">No data found</td>
    </tr>
 <?php } ?>
 </table

?>
<button onclick="document.location='dashboard.html'">Dashboard</button><br>
<br><br>
</center>
</body>
</html>
