
<!DOCTYPE html>
<html>
<body>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "aissel123";
  $dbname = "Company";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT empid,empname,salary FROM employees";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Employee Id</th>
<th>Employee Name</th>
<th>Salary</th>
</tr>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
            echo "<tr>";
echo "<td>" . $row['empid'] . "</td>";
echo "<td>" . $row['empname'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";

$conn->close();
?>

</body>
</html>
</html>
