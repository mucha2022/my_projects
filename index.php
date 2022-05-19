<html>  
    <head>  
        <title>PHP login system</title>    
        <link rel = "stylesheet" type = "text/css" href = "style.css">   
    </head>  
    <body>  
        <div id = "frm">  
            <h1>Login</h1>  
            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
                <p>  
                    <label> UserName: </label>  
                    <input type = "text" id ="user" name  = "user" />  
                </p>  
                <p>  
                    <label> Password: </label>  
                    <input type = "password" id ="pass" name  = "pass" />  
                </p>  
                <p>     
                    <input type =  "submit" id = "btn" value = "Login" />  
                </p>  
            </form>  
        </div>    
        <script>  
                function validation()  
                {  
                    var id=document.f1.user.value;  
                    var ps=document.f1.pass.value;  
                    if(id.length=="" && ps.length=="") {  
                        alert("User Name and Password fields are empty");  
                        return false;  
                    }  
                    else  
                    {  
                        if(id.length=="") {  
                            alert("User Name is empty");  
                            return false;  
                        }   
                        if (ps.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                        }  
                    }                             
                }  
            </script>  
    </body>     
    </html>  


<?php

/*
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
$conn->close();                                         /* */

?> 