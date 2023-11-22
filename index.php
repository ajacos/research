<?php/*
    $length = 8;
    $sec = "1011";
    $group_num = "1";
    $a_code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmopqrstuvwxyz'),1,$length);



    $servername = "sql12.freemysqlhosting.net";
    $username = "sql12664188";
    $password = "rZdSs7nUcd";
    $dbname = "sql12664188";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $stmt = $conn->prepare("INSERT INTO a_codes (sec, group_num, a_code) VALUES (:sec, :group_num, :a_code)");
    $stmt->bindParam(':sec', $sec);
    $stmt->bindParam(':group_num', $group_num);
    $stmt->bindParam(':a_code', $a_code);
  
    $stmt->execute();
    echo "New record created successfully";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        .show {
            display: block;
        }

        .hide {
            display: none;
        }
    </style>
</head>
<body>
    <form action="index.php">
        <p>Select a section</p>
        <select name="" id="secs">
            <option value="1">Archimedes</option>
            <option value="2">Bernoulli</option>
            <option value="3">Edison</option>
            <option value="4">Einstein</option>
            <option value="5">Faraday</option>
            <option value="6">Maxwell</option>
            <option value="7">Newton</option>
            <option value="8">Pascal</option>
            <option value="9">Thomson</option>
        </select>
        <input type="submit" id="submit" value="Get Groups" name="sub1">
        <div id="insert" class="hide">
            <input type="text" placeholder="">
        </div>
        <script>
            document.getElementById("submit").addEventListener('click', e => {
                e.preventDefault();
                console.log(document.getElementById("secs").value);
                document.getElementById('insert').classList.add('show');
                document.getElementById('insert').classList.remove('hide');
                var http = new XMLHttpRequest();
                var url = 'selecttab.php';
                var params = 'orem=ipsum&name=binny';
                http.open('POST', url, true);

                //Send the proper header information along with the request
                http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                http.onreadystatechange = function() {//Call a function when the state changes.
                    if(http.readyState == 4 && http.status == 200) {
                        alert(http.responseText);
                    }
                }
                http.send(params);
            });


        </script>
    </form>
</body>
</html>