
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

$sql = "SELECT t_id,t_name  FROM pharmacy";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["t_id"]. " - Name: " . $row["t_name"]. " " . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
