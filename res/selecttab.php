<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "research";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sec = $_POST['sec'];
    if($sec == "1") {
        $fsec = "1011";
    } else if ($sec == "2") {
        $fsec = "1012";
    } else if ($sec == "3") {
        $fsec = "1013";
    } else if ($sec == "4") {
        $fsec = "1014";
    } else if ($sec == "5") {
        $fsec = "1015";
    } else if ($sec == "6") {
        $fsec = "1016";
    } else if ($sec == "7") {
        $fsec = "1017";
    } else if ($sec == "8") {
        $fsec = "1018";
    } else if ($sec == "9") {
        $fsec = "1019";
    } else if ($sec == "10") {
        $fsec = "All";
    }


    if ($fsec == "All") {
        $sql = "SELECT * FROM a_codes";
    } else {
        $sql = "SELECT * FROM a_codes WHERE sec='$fsec'";
    }


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table>
        <tr>
            <th>Section</th>
            <th>Group number</th>
            <th>Access Code</th>
            <th>Status</th>
            <th>Reset Code</th>
        </tr> 
    <?php
    while($row = $result->fetch_assoc()) {
        
    ?>

        <tr>
            <td><?php echo $row['sec_name'] ?></td>
            <td class="number"><?php echo $row['group_num'] ?></td>
            <td><?php echo $row['a_code'] ?></td>
            <td><?php if($row['status'] == 0) {echo "Unused";} else {echo"Used";} ?></td>
            <td><input id="rst" class="rst" value="Reset Code" type="submit"> <input type="hidden" name="aid" value="<?php echo $row['id'] ?>"></td>
        </tr>



    <?php
    }
    echo "</table>";
    } else {
    echo "No groups found.";
    }
    $conn->close();
    ?>