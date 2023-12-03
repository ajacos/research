<?php

    header("Content-Type: application/json; charset=UTF-8");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "research";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$sql = "SELECT * FROM a_codes WHERE a_code='$a_code'";
        $stmt = $conn->prepare('SELECT * FROM students WHERE sec_code LIKE "10%" OR sec_code LIKE "09%"');
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);
        echo $json;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
