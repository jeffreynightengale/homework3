<?php require_once("header.php"); ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Customer ID</th>
      <th>Customer Name</th>
      <th>Employee ID</th>
      <th>Product Name</th>
      <th>Product Cost</th>
    </tr>
  </thead>
  <tbody>
<?php
$servername = "localhost:3306";
$username = "jeffreyn_user1";
$password = "0w_zeP}]OVy0";
$dbname = "jeffreyn_homework3";
    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT customer_id, customer_name, employee_id, product_name, product_cost FROM Customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
<tr>
  <td><?=$row["customer_id"]?></td>
  <td><?=$row["customer_name"]?></td>
  <td><?=$row["employee_id"]?></td>
  <td><?=$row["product_name"]?></td>
  <td><?=$row["product_cost"]?></td>
</tr>
  <?php
    }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
</table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
