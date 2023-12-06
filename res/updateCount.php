<?php
    try {
        //include 'conn.php';

        $stmt = $conn->prepare('SELECT * FROM section');
        $stmt->execute();
        $secCnt = $stmt->rowCount();
        foreach ($stmt as $row) {
            $sec = $row['sec_code'];

            $stmt2 = $conn->prepare("SELECT * FROM students WHERE sec_code = '$sec'");
            $stmt2->execute();
            $studCnt = $stmt2->rowCount();

        
            //echo $studentCnt."<br>";

            for ($i = 0; $i < $secCnt; $i++) {
                $stmt3 = $conn->prepare("UPDATE section SET num=".$studCnt." WHERE sec_code='$sec'");
                $stmt3->execute();
            }
        }


    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
    $conn = null;