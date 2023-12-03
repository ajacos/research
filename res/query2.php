<?php
    if (isset($_POST['a_code'])) {
    header("Content-Type: application/json; charset=UTF-8");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "research";
    $a_code = $_POST['a_code'];
    //echo $_POST['secs1'];

    if (isset($_POST['secs3'])) {
        if ($_POST['secs3'] == "1") {
            $level3 = "07";
        } elseif ($_POST['secs3'] == "2") {
            $level3 = "08";
        } elseif ($_POST['secs3'] == "3") {
            $level3 = "09";
        } elseif ($_POST['secs3'] == "4") {
            $level3 = "10";
        }
    } 
    if(isset($_POST['secs2'])) {
        if ($_POST['secs2'] == "1") {
            $level2 = "07";
        } elseif ($_POST['secs2'] == "2") {
            $level2 = "08";
        } elseif ($_POST['secs2'] == "3") {
            $level2 = "09";
        } elseif ($_POST['secs2'] == "4") {
            $level2 = "10";
        }
    } 
    if (isset($_POST['secs1'])) {
        if ($_POST['secs1'] == "1") {
            $level1 = "07";
        } elseif ($_POST['secs1'] == "2") {
            $level1 = "08";
        } elseif ($_POST['secs1'] == "3") {
            $level1 = "09";
        } elseif ($_POST['secs1'] == "4") {
            $level1 = "10";
        } elseif ($_POST['secs1'] == "JHS") {
            $level1 = "JHS";        
        }
    }
    

    if (isset($level1)) {
        if ($level1 == "JHS") {
            $query = "SELECT username FROM students WHERE count <= 6;";
        } else {
            $query = "SELECT * FROM students WHERE sec_code LIKE '".$level1."%' AND count <= 6;";
        }
    } if (isset($level1, $level2)) {
        $query = "SELECT * FROM students WHERE sec_code LIKE '".$level1."%' OR sec_code LIKE '".$level2."%' AND count <= 6;";
    } if (isset($level1, $level2, $level3)) {
        $query = "SELECT * FROM students WHERE sec_code LIKE '".$level1."%' OR sec_code LIKE '".$level2."%' OR sec_code LIKE '".$level3."%' AND count <= 6;";
    }

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "UPDATE a_codes SET status=1 WHERE a_code=:a_code";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':a_code', $a_code);
        $stmt->execute();
        
        $stmt2 = $conn->prepare($query);
        $stmt2->execute();


        $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        $results = mb_convert_encoding($results, 'UTF-8', 'UTF-8');
        $json = json_encode($results);
        echo $json;
        //echo json_last_error_msg();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    } else {
        echo "No a_code given";
    }