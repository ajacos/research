<?php
    $length = 8;
    for ($i = 0; $i < 200; $i++) {
        $a_code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmopqrstuvwxyz'),1,$length);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "research";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("INSERT INTO a_codes (a_code) VALUES (:a_code)");
        $stmt->bindParam(':a_code', $a_code);
    
        //$stmt->execute();
        echo "New record created successfully ".$a_code;
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    } 


?>