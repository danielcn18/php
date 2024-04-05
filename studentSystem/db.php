<?php
$servername = "localhost:3310";
$username = "root";
$password = "";
$dbname = "studentmanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?> 