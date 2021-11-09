<?php
$dbservername = "mysql-net";
$dbusername = "login";
$dbpassword = "login";
$dbname = "mainDB";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>