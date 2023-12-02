<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "research";
    $a_code = $_POST['a_code'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$sql = "SELECT * FROM a_codes WHERE a_code='$a_code'";
        $stmt = $conn->prepare('SELECT * FROM a_codes WHERE a_code=:a_code /*AND status=0*/');
        $stmt->execute([ 'a_code' => $a_code ]);


        if ($stmt->rowCount() > 0) {
            foreach($stmt as $row) {
              $acode = $row['a_code'];
            }   
?>
            


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Random Name Generator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>
   body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    a {
      color: black;
      font-style: italic;
    }
    
    a:hover {
      font-style: normal;
    }

    textarea {
      resize: none;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      width: 400px;
      height: 300px;
    }
    
    input[type=submit], input[type=number] {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      width: 200px;
    }

    table {
      /*position: relative;*/
      display: flex;
      align-items: center;
    }

    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      width: 480px;
      text-align: left;
    }

    table tr:nth-child(even) {
      background-color: rgb(224, 224, 224);
    }

    th {
      background-color: rgb(202, 202, 202);
    }

    .thin, .sec {
      width: 40px; 
    }

    .sec {
      width: 100px;
    }

    #err {
      color: red;
    }

  </style>
  <body>
    <!--A json file for the info of the sections that matches the data in the database-->
    <p>If there are problems or if you want to recommend something just message Aaron Acosta, Rafael Calixtro or Claver Bael of 10-Faraday :)</p>
    <p><strong>Be CAREFUL in using this program your group is limited to 1 use only.</strong></p>
    <!--
    <button id="10rst">Grade 10 RST</button>
    <button id="9rst">Grade 9 RST</button>
    <button id="8rst">Grade 8 RST</button>
    <button>Grade 7 RST</button>
    <br>
    <br>
    -->
    <form id="frm">
      <select name="secs" id="level" required>
        <option value="0">Select a Level</option>
        <option value="1">Grade 7</option>
        <option value="2">Grade 8</option>
        <option value="3">Grade 9</option>
        <option value="4">Grade 10</option>
        <option value="5">All JHS</option>
      </select>
      <select name="secs" id="level1" class="hide">
        <option value="0">Select a Level</option>
        <option value="1" id="lopt1">Grade 7</option>
        <option value="2" id="lopt2">Grade 8</option>
        <option value="3" id="lopt3">Grade 9</option>
        <option value="4" id="lopt4">Grade 10</option>
      </select>
      <select name="secs" id="level2" class="hide">
        <option value="0">Select a Level</option>
        <option value="1" id="2lopt1">Grade 7</option>
        <option value="2" id="2lopt2">Grade 8</option>
        <option value="3" id="2lopt3">Grade 9</option>
        <option value="4" id="2lopt4">Grade 10</option>
      </select>
      <input type="submit" value="Submit Query" id="submit" class="hide">
      <input type="number" name="" placeholder="populationsize" id="pop" value="" readonly class="hide">
      <input type="number" name="" placeholder="samplesize" id="sam" class="hide" readonly>
      <br><br>
      <input type="button" id="addlevel" class="hide" value="Add another level">
      <input type="button" id="addlevel2" class="hide" value="Add another level">
      <input type="button" id="remlevel1" class="hide" value="Remove level">
      <input type="button" id="remlevel2" class="hide" value="Remove level">
      <br><br>
      <input type="hidden" value="<?= $acode ?>" id="acode">
      <p id="err" class="hide"></p>
    </form>
    <div class="hide">
      <p id="textp"></p>
      <table id="textn"></table>
      <div id="addbtn"></div>
    </div>
  </body>
</html>




            <?php
        } else {
        echo "Wrong access code, please try again.";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>