<?php
$servername = "localhost";
$username = "jeffreyn_homework3";
$password = "MicahNight15";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<?php
$servername = "localhost";
$username = "jeffreyn_homework3";
$password = "MicahNight15";
$dbname = "jeffreyn_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT employee_id, employee_name FROM Employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["employee_id"]. " - Name: " . $row["employee_name"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
