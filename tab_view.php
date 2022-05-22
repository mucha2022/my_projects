<?php

    // Include config file
    require_once "config.php";

    $sql = "SELECT id, username, password FROM users";
    $result = $link->query($sql);

    echo "<br><br><br>";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - User: " . $row["username"]. " - Pass: ******** " . "<br>";
        }
    } else {
        echo "0 results";
    }
    $link->close(); 
?>