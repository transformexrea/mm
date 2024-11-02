<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "07704633343";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT code_07704633343, dawa_07704633343, molat_07704633343 FROM m07704633343";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "code_07704633343: " . $row["code_07704633343"]. " - Name: " . $row["dawa_07704633343"]. " " . $row["molat_07704633343"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>