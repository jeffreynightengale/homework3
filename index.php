<!doctype html>
<html lang="en">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
<?php
$servername = "localhost";
$username = "jeffreyn_homework3";
$password = "MicahNight2001";

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
$password = "MicahNight2001";
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
    ?>
<tr>
  <td><?=$row["employee_id"]?></td>
  <td><?=$row["employee_name"]?></td>
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
</table>
