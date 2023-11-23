<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "bael107comprog";
    $password = "passbael107comprog";
    $dbname = "bael107comprog";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM a_codes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    ?>
        <table>
        <tr>
            <th>Section</th>
            <th>Group Number</th>
            <th>Access Code</th>
        </tr> 
    <?php
    while($row = $result->fetch_assoc()) {
        if ($ec)
    ?>

        <tr>
            <td><?php echo $row['sec'] ?></td>
            <td><?php echo $row['group_num'] ?></td>
            <td><?php echo $row['a_code'] ?></td>
        </tr>



    <?php
    }
    echo "</table>";
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>