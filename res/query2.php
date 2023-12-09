<?php
    header("Content-Type: application/json; charset=UTF-8"); 
    if (isset($_POST['a_code'])) {
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
            $query = "SELECT * FROM students WHERE count <= 9;";
            $secquery = "SELECT * FROM section;";
            $sample = "1";
        } else {
            $query = "SELECT * FROM students WHERE level = ".$level1." AND count <= 9;";
            $secquery = "SELECT * FROM section WHERE sec_code LIKE '".$level1."%';";
            $sample = "0";
        }
    } if (isset($level1, $level2)) {
        $query = "SELECT * FROM students WHERE level = ".$level1." OR level = ".$level2." AND count <= 9;";
        $secquery = "SELECT * FROM section WHERE sec_code LIKE '".$level1."%' OR sec_code LIKE '".$level2."%';";
        $sample = "0";
    } if (isset($level1, $level2, $level3)) {
        $secquery = "SELECT * FROM section WHERE sec_code LIKE '".$level1."%' OR sec_code LIKE '".$level2."%' OR sec_code LIKE '".$level3."%';";
        $query = "SELECT * FROM students WHERE level = ".$level1." OR level = ".$level2." OR level = ".$level3." AND count <= 9;";
        $sample = "0";
    }

    try {
        include 'conn.php';
        
        $sql = "UPDATE a_codes SET status=1 WHERE a_code=:a_code";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':a_code', $a_code);
        $stmt->execute();
        
        $stmt2 = $conn->prepare($query);
        $stmt2->execute();

        $stmt3 = $conn->prepare($secquery);
        $stmt3->execute();

        $sections = $stmt3->fetchAll(PDO::FETCH_ASSOC);
        $sections = mb_convert_encoding($sections, 'UTF-8', 'UTF-8');


        $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        $results = mb_convert_encoding($results, 'UTF-8', 'UTF-8');
        if ($sample == "1") {
            $sample2 = "1";
        } else {
            $sample2 = "0";
        }

        $finalJSON = [
            "sections" => $sections,
            "students" => $results,
            "sample" => $sample2
        ];
        $json = json_encode($finalJSON, JSON_UNESCAPED_UNICODE);
        echo $json;
        
        //echo json_last_error_msg();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    } else {
        echo "No a_code given";
    }