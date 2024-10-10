<?php
$servername = "localhost";
$username = "root"; // Keep this as 'root'
$password = ""; // Update this if you've set a different password
$dbname = "nucleotide"; // Replace with your actual database name

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
// echo "Connected successfully"; // Uncomment this line for debugging purposes
?>
