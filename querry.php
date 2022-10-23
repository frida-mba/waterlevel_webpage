<!DOCTYPE html>
<html><body>
<?php

$servername = "localhost";

// REPLACE with your Database name
$dbname = "waterlevel";
// REPLACE with Database user
$username = "root";
// REPLACE with Database user password
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, tank_location, tank_level, time_inserted FROM tank ORDER BY id DESC";

echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>ID</td> 
        <td>Tank location</td> 
        <td>Tank level</td> 
        <td>Time inserted</td>
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $ID = $row["id"];
        $location = $row["tank_location"];
        $level= $row["tank_level"];
        $time= $row["time_inserted"]; 

        echo '<tr> 
                <td>' . $ID . '</td> 
                <td>' .$location . '</td> 
                <td>' . $level . '</td> 
                <td>' . $time . '</td>
              </tr>';
    }
    $result->free();
}

$conn->close();
?> 
</table>
</body>
</html>