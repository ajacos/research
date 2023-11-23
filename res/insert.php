<?php
    $length = 8;
    $sec = "1019";
    $group_num = "5";
    $secname = "Thomson";
    $a_code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmopqrstuvwxyz'),1,$length);



    $servername = "localhost";
    $username = "bael107comprog";
    $password = "passbael107comprog";
    $dbname = "bael107comprog";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $stmt = $conn->prepare("INSERT INTO a_codes (sec, sec_name, group_num, a_code) VALUES (:sec, :sec_name, :group_num, :a_code)");
    $stmt->bindParam(':sec', $sec);
    $stmt->bindParam(':sec_name', $secname);
    $stmt->bindParam(':group_num', $group_num);
    $stmt->bindParam(':a_code', $a_code);
  
    $stmt->execute();
    echo "New record created successfully ".$a_code;
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>