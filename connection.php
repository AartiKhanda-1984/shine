<?php
$servername = "localhost";
$username = "root"; // Keep this as 'root'
$password = ""; // Update this to the new password you set
$dbname = "nucleotide"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
