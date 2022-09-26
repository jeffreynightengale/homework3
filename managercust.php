<?php require_once("header.php"); ?>
<h1>Manager Sells</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Customer Name</th>
      <th>Product</th>
      <th>Product Cost</th>
      <th>Manager Name</th>
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
$cid = $_POST['id'];
echo $cid;
$sql = "select * from Customer c join Employee e on c.employee_id = e.employee_id join Manager m on e.manager_id = m.manager_id where m.manager_id=" . $cid;
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["customer_id"]?></td>
    <td><?=$row["product_name"]?></td>
    <td><?=$row["product_cost"]?></td>
    <td><?=$row["manager_name"]?></td>
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
