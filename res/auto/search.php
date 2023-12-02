<?php
$conn = new mysqli('localhost', 'root', '', 'research');
$input = $_GET["term"];
$results = array();


if ($input != ""){
    $sql = "SELECT * FROM a_codes WHERE sec_name LIKE ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("s", $input);
    $input = $input."%";
    $statement->execute();
    $result = $statement->get_result();
    while ($row = $result->fetch_assoc()){
        $results[] = $row["a_code"];
    }
    $statement->close();
}
$conn->close();

echo json_encode($results);
?>
