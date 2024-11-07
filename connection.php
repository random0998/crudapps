<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="comlab_inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "ALTER TABLE members AUTO_INCREMENT = 1";
if ($conn->query($sql) === TRUE) {
    echo "Auto-increment ID reset successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// echo Connected successfully
?>