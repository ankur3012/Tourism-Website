<?php
$servername = "localhost";
$username = "root"; // Default username for local installations
$password = ""; // Default password for local installations
$dbname = "adventure_db";

// Create connection
$conn = new mysqli($localhost, $root,$adventure_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
