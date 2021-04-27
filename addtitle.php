<?php
$title = $_POST['title'];
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO news (title)
VALUES ('$title')";

$conn->query($sql);
$conn->close();
header('Location: index.php');

?>