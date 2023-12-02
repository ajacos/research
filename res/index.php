<!--?php/*
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
?-->

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
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .show {
            display: block;
        }

        .hide {
            display: none;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 480px;
            text-align: left;
        }

        th {
            background-color: rgb(190, 190, 190);
        }

        th, td {
            padding: 5px;
            border: 1px solid black;
        }

        button {
            margin: 5px;
        }

        .number {
            width: 70px;
        }

        tr:nth-child(odd) {
            background-color: rgb(224, 224, 224);
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <p>Select amount to display</p>
        <select name="" id="amo">
            <option value="0">Select amount to display</option>
            <option value="1">10</option>
            <option value="2">30</option>
            <option value="3">50</option>
            <option value="4">100</option>
            <option value="5">All</option>
        </select>
        <br>
        <br>
        <div id="insert" class="hide">
        </div>
        <script>
            document.getElementById("amo").addEventListener('input', e => {
                e.preventDefault();
                if (document.getElementById("amo").value == 0) {
                    document.getElementById('insert').classList.add('hide');
                    document.getElementById('insert').classList.remove('show');
                    document.getElementById('insert').innerHTML = ""
                } else {
                    document.getElementById('insert').classList.add('show');
                    document.getElementById('insert').classList.remove('hide');
                    let http = new XMLHttpRequest();
                    let url = 'selecttab.php';
                    let params = `amo=${document.getElementById("amo").value}`;
                    http.open('POST', url, true);

                    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    http.onreadystatechange = function() {
                        if(http.readyState == 4 && http.status == 200) {
                            document.getElementById('insert').innerHTML = this.responseText;
                        }
                    }
                    http.send(params);
                }
            });
        </script>
    </form>


</body>
</html>
