<?php

    // Include config file
    require_once "config.php";

    $sql = "SELECT id, username, password FROM users";
    $result = $link->query($sql);

    echo "<br><br><br>";

    if ($result->num_rows > 0) {
        echo('<h2>Uživatelé</h2><table border="1">');
        echo('<tr><td> ID </td><td> Uživatel </td><td> Heslo </td></tr>');
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . " ******** " . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $link->close(); 
?>