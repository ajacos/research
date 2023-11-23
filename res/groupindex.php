<?php
    $servername = "localhost";
    $username = "bael107comprog";
    $password = "passbael107comprog";
    $dbname = "bael107comprog";
    $a_code = $_POST['a_code'];
    $conn2 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM a_codes WHERE a_code='$a_code'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo 'found data';
            $update = "UPDATE a_codes SET status='1' WHERE a_code=:a_code";

            // Prepare statement
            $stmt = $conn2->prepare($update);
            $stmt->bindParam(':a_code', $a_code);
          
            // execute the query
            $stmt->execute();
            echo "username used";
        }   
    } else {
    echo "0 results";
    }
    $conn->close();
?>