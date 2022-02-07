<?php
$servername = "localhost";
$username = "root";
$password = "Phamhung:09";
$dbname = "datacosupplychain";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>