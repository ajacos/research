<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "research";
$aid = $_POST['aid'];


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE a_codes SET  status=0 WHERE id=:id";

  // Prepare statement
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $aid);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
echo "<script>history.back()</script>"
?>