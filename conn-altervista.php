<?php
$servername = "localhost";
$username = "nonnonnapapera";
$password = "";
$dbname = "my_nonnonnapapera";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>