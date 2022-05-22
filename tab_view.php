<?php

    // Include config file
    require_once "conn.php";

    $sql = "SELECT id, username, password FROM users";
    $result = $con->query($sql);

    // echo "<br><br><br>";

    if ($result->num_rows > 0) {
        echo('<h2>Users</h2><table border="1">');
        echo('<tr><td> ID </td><td> Username </td><td> Password </td></tr>');
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . " ******** " . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $con->close(); 
?>