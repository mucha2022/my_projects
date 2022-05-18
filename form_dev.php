<!DOCTYPE html>
<html lang="cs-cz">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Registrace uživatele</title>
    </head>

    <body>

        <h1>Registrace uživatele</h1>

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

        if ($_POST)
        {
            $sql = "INSERT INTO users(user, pass)
                    VALUES ('" . $_POST['user'] .  "','" . $_POST['pass'] . "')";
            // echo $sql;
            console.log($sql);       
            $result = $conn->query($sql);
            echo('<p>Byl jste úspěšně zaregistrován.</p>');
        }
        ?>

        <form method="post">
            User:<br />
            <input type="text" name="user" /><br />
            Password:<br />
            <input type="text" name="pass" /><br />
            <input type="submit" value="Zapsat" />
        </form>

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
    </body>
</html>