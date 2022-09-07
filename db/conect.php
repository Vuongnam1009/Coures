<?php
$servername = "localhost";
$username = "du1998";
$password = "01892014du";
$dbname = "course";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}