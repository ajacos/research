<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "research";
$a_code = $_POST['a_code'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE a_codes SET status=1 WHERE a_code=:a_code";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':a_code', $a_code);
  $stmt->execute();

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 