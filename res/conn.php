<?php    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "research";
    $charset = 'utf8';

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=$charset", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);