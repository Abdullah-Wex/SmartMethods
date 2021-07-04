<?php
$servername = "localhost";
$username = "iWexiL";
$password = "1234";
$DB = "smartmethod";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
//header("Location:/Smart-Methods_Training/First%20Task/php/Task.php");
?>
