<?php
    if (isset($_POST['username'])) {
        try {
            include 'conn.php';
            
            $stmt = $conn->prepare('SELECT count FROM students WHERE username=:user');
            $stmt->bindParam(':user', $_POST['username']);
            $stmt->execute();

            foreach ($stmt as $row) {
                $count = $row['count'];
                $newCnt = $count+1;
                $update = $conn->prepare('UPDATE students SET count=:cnt WHERE username=:user');
                $update->bindParam(':cnt', $newCnt);
                $update->bindParam(':user', $_POST['username']);
                $update->execute();
            }

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    } else {
        echo "No username given.";
    }
?>