<?php
    try {
        include 'conn.php';  

        $amo = $_POST['amo'];

        if($amo == "1") {
            $sql = "SELECT * FROM a_codes LIMIT 10";
        } elseif ($amo == "2") {
            $sql = "SELECT * FROM a_codes LIMIT 30";
        } elseif ($amo == "3") {
            $sql = "SELECT * FROM a_codes LIMIT 50";
        } elseif ($amo == "4") {
            $sql = "SELECT * FROM a_codes LIMIT 100";
        } elseif ($amo == "5") {
            $sql = "SELECT * FROM a_codes";
        } elseif ($amo == "0") {
            null;
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
        ?>
            <table>
            <tr>
                <th>Id</th>
                <th>Access Code</th>
                <th>Status</th>
            </tr> 
        <?php
        foreach($stmt as $row) {
            ?>
                <tr>
                    <td class="number"><?php echo $row['id'] ?></td>
                    <td><?php echo $row['a_code'] ?></td>
                    <td><?php if($row['status'] == 0) {echo "Unused";} else {echo"Used";} ?></td>
                </tr>
            <?php
        }
        echo "</table>";
        } else {
        echo "No groups found.";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn= null;
    ?>