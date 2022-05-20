<?php
    $sql = "SELECT id, user, pass FROM users";
    $result = $conn->query($sql);

    echo "<br><br><br>";

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - User: " . $row["user"]. " - Pass: ******** " . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>