<?php            
$servername = "localhost";
$username = "bael107comprog";
$password = "passbael107comprog";
$dbname = "bael107comprog";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}