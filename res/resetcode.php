<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "research";

$length = 8;
$a_code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmopqrstuvwxyz'),1,$length);
$aid = $_POST['aid'];


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE a_codes SET a_code=:a_code , status=0 WHERE id=:id";

  // Prepare statement
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':a_code', $a_code);
  $stmt->bindParam(':id', $aid);

  // execute the query
  $stmt->execute();

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
echo $a_code;
?>