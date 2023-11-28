<?php
    header("Content-Type: application/json; charset=UTF-8");
    $servername = "localhost";
    $username = "bael107comprog";
    $password = "passbael107comprog";
    $dbname = "bael107comprog";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$sql = "SELECT * FROM a_codes WHERE a_code='$a_code'";
        $stmt = $conn->prepare('SELECT * FROM a_codes');
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            foreach($stmt as $row) {

                $arr[] = $row;

            }   
        } else {
        echo "Wrong access code, please try again.";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;



    echo json_encode($arr);
