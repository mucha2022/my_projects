<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully" . "<br><br><br>";

$sql = "SELECT id, user, pass FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo('<h2>Uživatelé</h2><table border="1">');
  echo('<tr><td> ID </td><td> Uživatel </td><td> Heslo </td></tr>');  
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["user"]. "</td><td>" . " ******** " . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
/*



*/

?> 